<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Author;

class BookController extends Controller
{
    public function index(Book $book)
    {
        return view('readings.index')->with(['books' => $book->getByLimit()]);
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
        $book->title = $input['title'];
        $book->author_id = $authorid;
        $book->pages = $input['pages'];
        $book->save();
        //フォームから入力された名前を取得
        return redirect('/bookshelves/');
    }
    
    public function bookdetail(Book $book)
    {
        return view('readings.bookdetail')->with(['book' => $book]);
    }
    
    public function edit(Book $book)
    {
        return view('readings.bookedit')->with(['book' => $book]);
    }
    
    public function update(BookRequest $request, Book $book)
    {
        $input_book = $request['book'];
        $book->fill($input_book)->save();
        
        return redirect('/books/' . $book->id);
    }
}
