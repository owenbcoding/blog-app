<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/tags/{tag:name}', TagController::class);

// Route::get('/posts/{post:slug}', function (\App\Models\Post $post) {
//     return view('post', ['post' => $post]);
// })->name('posts.show');

Route::get('/about', function () { 
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin', function (){
    return view('layouts.admin');
})->name('layouts.admin')->middleware("auth");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
 
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
