<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/about', function () {  
    return view('about'); 
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


require __DIR__.'/auth.php';
