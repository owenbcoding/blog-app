<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AdminPostController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show'])->name('show');

Route::get('/tags/{tag:name}', TagController::class);

Route::get('/about', function () { 
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin/posts', [AdminPostController::class, 'index'])->name('admin.posts.index')->middleware("auth");

Route::get('/admin', function () {
    return view('admin.index');
})->name('admin')->middleware(['auth', 'verified']);

Route::post('/admin/posts', [AdminPostController::class, 'store'])->name('admin.posts.store')->middleware("auth");

Route::delete('/admin/posts/{post}/delete', [AdminPostController::class, 'destroy'])->name('admin.posts.delete')->middleware("auth");

Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin/posts/create', function () {
    return view('admin.posts.create');
})->name('admin.posts.create')->middleware("auth");

require __DIR__.'/auth.php';
