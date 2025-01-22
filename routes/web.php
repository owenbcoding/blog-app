<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('home');

// Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('posts.show');

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
    return view('admin.index');
})->name('admin.index')->middleware("auth");


require __DIR__.'/auth.php';
