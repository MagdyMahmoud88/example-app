<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::with('employer')->latest()->simplePaginate(3);
//    lazy loading because more than queries
//    $jobs = Job::all();

        return view('job.index',
            [
                'jobs' => $jobs]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store( Request $request)
    {
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
    }

    /**
     * Display the specified resource.
     */
//    route model Binding
    public function show(Job $job)
    {
        return view('job.show', ['jobs' => $job]);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
