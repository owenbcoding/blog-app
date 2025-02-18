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
        return view('admin.posts.create', [
            'tags' => Tag::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => [ 'required' ],
            'thumbnail' =>  [ 'required' ],
            'excerpt' => [ 'required' ],
            'body' => [ 'required' ],
            'tag' => [ 'nullable' ],
        ]);

        // dd(request()->all());

        $validateData['user_id'] = auth()->user()->id;
        $validateData['thumbnail'] = $request->file('thumbnail')->store('thumbnails', 'public');

        $post = Post::create($validateData);

        if ($request->has('tag')) {
            $tags = explode(',', $request->input('tag'));
            if(count($tags) <= 4) { 
                $tagIds = Tag::whereIn('name', $tags)->pluck('id');
                $post->tags()->attach($tagIds);
            }
        }    

        return redirect()->route('admin.posts.index');
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
