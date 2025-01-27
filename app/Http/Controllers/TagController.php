<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class TagController extends Controller
{
    public function __invoke(Post $post)
    {
        $tags = $post->tags;
        return view('post-card', ['post' => $post, 'tags' => $tags]);
    }
    // return view('show', 'posts' => $tag->posts);
}
