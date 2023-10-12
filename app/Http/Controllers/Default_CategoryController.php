<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DefaultCategory;


class Default_CategoryController extends Controller
{
    public function edit(DefaultCategory $default_category)
    {
        return view('readings.bookedit')->with(['default_categories' => $default_category->get()]);
    }
}
