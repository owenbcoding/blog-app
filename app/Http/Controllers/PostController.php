<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('published_at')->latest()->paginate(6);
        return view('index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('show', compact('post'));
    }
}
