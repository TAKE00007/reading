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
    
    public function create()
    {
        return view('readings.create');
    }
    
    public function show(Post $post)
    {
        return view('readings.show')->with(['post'=> $post]);
    }
    
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('posts/' . $post->id);
    }
}
