<?php

use App\Http\Controllers\JobController;
use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::view('/' , 'home');
Route::get('/contact', function () {
    return view('contact');
});

Route::resource('jobs', JobController::class);

//Route::get('/', function () {
//    return view('home');
//});



// index
//Route::get('/jobs', [JobController::class, 'index']);
//
// create
//Route::get('/jobs/create', [JobController::class, 'create']);
// show
//Route::get('/job/{job}', [JobController::class, 'show']);
//
// store
//Route::post('/jobs',[JobController::class, 'store']);

//Route::controller(JobController::class)->group(function () {
//    Route::get('/jobs' , 'index');
//    Route::get('/jobs/create' , 'create');
//    Route::post('/jobs' , 'store');
//    Route::get('/jobs/{job}' , 'show');
//
//});

