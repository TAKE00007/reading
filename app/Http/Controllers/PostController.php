<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
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
    
    
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input)->save();
        return redirect('posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('readings.edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
}
