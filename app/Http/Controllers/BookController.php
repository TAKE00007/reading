<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Author;
use App\Models\Record;
use App\Models\DefaultCategory;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index(Book $book)
    {
        return view('readings.index')->with(['books' => $book->getByBookLimit()]);
        //blade内で使う変数'books'と設定。'books'の中身にgetを使い、インスタンス化した$bookを代入。
    }
    
    public function bookshelves(Book $book, Author $author)
    {
        return view('readings.bookshelves')->with(['books' => $book->getByLimit(),'authors' => $author->get()]);
        //blade内で使う変数'books'と設定。'books'の中身にgetを使い、インスタンス化した$bookを代入。
    }
    
    public function addbooks(Author $author)
    {
        return view('readings.addbooks')->with(['authors' => $author->get()]);
    }
    
    public function store(Request $request, Book $book, Author $author)
    {
        $input = $request['author'];
        $author->fill($input)->save();
        //authorのidを$authoridとする
        $authorid = $author->id;
        $input = $request['book'];
        $input_categories = $request->categories_array;//categories_arrayはnameで設定
        $book->title = $input['title'];
        $book->author_id = $authorid;
        $book->pages = $input['pages'];
        $book->save();
        
        // attacメソッドを使って中間テーブルにデータを保存
        $book->categories()->attach($input_categories);
        //フォームから入力された名前を取得
        return redirect('books/' . $book->id);
    }
    
    public function bookdetail(Book $book)
    {
        return view('readings.bookdetail')->with(['book' => $book]);
    }
    
    // public function edit(Book $book)
    // {
    //      return view('readings.bookedit')->with(['book' => $book]);
    // }
    
    public function update(Request $request, Book $book, Record $record)
    {
        
        $validated = $request->validate([
            'book.title' => 'required|string|max:40',
            'book.reading_pages' => "required|integer|max:{$book->pages}",
        ]);
        $input = $request['book'];
        
        // $book->fill($input_book)->save();
        // 各月毎の本の集計
        // if
        $book->title = $input['title'];
        $diff_pages = $input['reading_pages'] - $book->reading_pages;
        // dd($diff_pages);
        $book->reading_pages = $input['reading_pages'];
        $date = date('Y-m-d',strtotime("first day of this month"));
        // 月初を取得
        $logout_date = Auth::user()->last_logout_at;
        // Authは認証情報を取得
        if ($date == $logout_date) {
            $book->month_progress += $diff_pages;
            // month_progressに差分を代入
        } else {
            // foreachで全ての本のmonth_progressをリセット
            $books = Book::get();
            foreach($books as $book1){
                $book1->month_progress = 0;
                $book1->save();
            }
        
            $book->month_progress = $diff_pages;
            
            // 月が異なる場合、month_progressに新しくreading_pagesを代入
            // foreachに含めないように
        }
        // dd($book);
        // dd($book->month_progress);
        // 差分を取得
        $book->update();
        // dd($book);
        $sum = 0;
        
        $books = Book::get();
        
        foreach($books as $book2){
            $sum +=$book2->month_progress;
        }
        
        
        if($record->where('month',$date)->exists()){
            $record = $record->where('month',$date)->first();
        // あった場合、複数ある中での最初の1つの情報
        // recordtableのmonthカラムに$dateのデータを探す
        // trueかfalseで返す
            $record->month_page = $sum;
            $record->save();
        } else{
            $input = ['month_page'=>$sum,'month'=>date('Y-m-d',strtotime("first day of this month"))];
            // データの新規作成
            $record->fill($input)->save();
        }
        
        return redirect('/books/' . $book->id);
    }
    
    public function edit(Book $book, DefaultCategory $default_category)
    {
         return view('readings.bookedit')->with(['book' => $book,'default_categories' => $default_category->get()]);
    }
    
    
    // public function edit(Default_Category $default_category)
    // {
    //     return view('readings.bookedit')->with(['default_categories' => $default_category->get()]);
    // }
}
