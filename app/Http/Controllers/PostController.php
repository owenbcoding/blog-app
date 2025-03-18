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
        // $posts = Post::where("published_at", "!=", null)->latest()->with('tags')->paginate(6);
        // 'tags' => Tag::all(),
        return view('posts.index', [
            'posts' => Post::where("published_at")->latest()->with('tags')->paginate(6),
        ]);
        // $posts = Post::with('tags')->whereNotNull('published_at')->latest()->paginate(6);
        // return view('posts.index', compact('posts'));
    }

    public function store(Request $request)
    {
        $post = Post::create($request->all());
        $post->title = $request->input('title');
        $post->slug = Str::slug($request->input('title')); // Generate the slug manually
        $post->save();
        return redirect()->route('show', ['post' => $post->slug]);
    }


    public function show(Post $post)
    {
        $post->load('tags');
        return view('show', compact('post'));
    }
}
