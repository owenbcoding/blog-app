<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // $posts = Post::where('published_at')->latest()->paginate(6);
        // $posts = Post::where("published_at", "!=", null)->latest()->with('tags')->paginate(6);
        return view('index', [
            'posts' => Post::where("published_at")->latest()->paginate(6)
        ]);
        // return view('index', compact('posts'));
    }


    public function show(Post $post)
    {
        return view('show', compact('post'));
    }
}
