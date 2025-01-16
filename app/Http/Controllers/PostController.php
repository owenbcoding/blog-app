<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at')->latest()->paginate(6);
        return view('index', compact('posts'));
    }

    public function show(Post $post)
    {
        // return view('show', compact('post'));
    }
}
