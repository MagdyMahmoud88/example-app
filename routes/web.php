<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use Illuminate\Support\Facades\Route;

// Route::get('/counter',Counter::class)->name('livewire.counter');
// Route::get('/create',CreatePost::class);
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/' , function() {
    return view('home');
});
Route::get('/about' , function() {
    return view('about');
});
Route::get('/contact' , function() {
    return view('contact');
});