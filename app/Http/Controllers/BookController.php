<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(Book $book)
    {
        return view('readings.index')->with(['books' => $book->getByLimit()]);
        //blade内で使う変数'books'と設定。'books'の中身にgetを使い、インスタンス化した$bookを代入。
    }
    
    public function bookshelves(Book $book)
    {
        return view('readings.bookshelves')->with(['books' => $book->getByLimit()]);
        //blade内で使う変数'books'と設定。'books'の中身にgetを使い、インスタンス化した$bookを代入。
    }
}
