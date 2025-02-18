<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;
use App\Models\Post;

class TagController extends Controller
{
    public function __invoke(Tag $tag)
    {
        return view('show', ['posts' => $tag->posts]);
    }
}
