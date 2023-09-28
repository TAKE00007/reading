<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function posts(Post $post)
    {
        return view('readings.posts')->with(['posts' => $post->getByLimit()]);
    }
}
