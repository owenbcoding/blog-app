<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\Storage;

class AdminPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.posts.index', [
            'posts' => Post::with('tags')->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:150',
            'thumbnail' => 'required|image',
            'tags' => 'required|string',
            'excerpt' => 'required|string|max:150',
            'body' => 'required|string|max:4096',
        ]);
        
        // dd(request()->all());
        
        $validateData['slug'] = Str::slug($validateData['title']);
        $validateData['user_id'] = auth()->user()->id;
        $validateData['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        // $post = Auth::user()->posts()->create($validateData); 
        
        $post = Post::create($validateData);

        // if ($validateData['tags'] ?? false) {
        //     foreach (explode(',', $validateData['tags']) as $tag) {
        //         $post->tag($tag);
        //     }
        // }
        
        return redirect()->route('admin.posts.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
