<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class CategoryController extends Controller
{
    public function addbooks(Category $category)
    {
        return view('readings.addbooks')->with(['categories' => $category->get()]);
    }
}
