<?php

use App\Livewire\Counter;
use App\Livewire\CreatePost;
use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
//    lazy loading because more than queries
//    $jobs = Job::all();

    return view('job.index',
        [
            'jobs' => $jobs]
    );
});

Route::get('/job/create' , function () {
    return view('job.create');
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
// $job = Arr::first($jobs, fn($job)=>$job['id']==$id );

    return view('job.show', ['jobs' => $job]);
});

Route::post('/jobs', function () {
    request()->validate([
        'title' =>['required' , 'min:3'],
        'salary' =>['required' ],
    ]);
    job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);
    return redirect('/jobs');
});
Route::get('/contact', function () {
    return view('contact');
});

