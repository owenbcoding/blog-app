<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;


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
        return view('admin.posts.create', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validates the date from the form
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'thumbnail' => 'nullable|image',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'tags' => 'nullable|string',
        ]);

        // dd(request()->all());
        
        // store the thumbnail in the public folder and set user id
        $validateData['user_id'] = auth()->user()->id;
        
        $validateData['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');
        
        // create the post and sync the tags
        $post = Post::create(Arr::except($validateData, 'tags'));

        $tags = collect(explode(',', $validateData['tags']))->map(function ($tag) {
            return Tag::firstOrCreate(['name' => $tag]);
        });

        $post->tags()->sync($tags);
        

        return redirect()->route('admin.posts.index')->with('success', 'Post created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
            'post' => $post,
            'tags' => Tag::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return back()->with('success', 'Post Deleted');
    }
}
