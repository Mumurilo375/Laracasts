<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;




Route::get('/', function () {
    $jobs = Job::all();

    //return dd($jobs[2]->salary);
    //return dd($jobs[2]->salary);
    return view('home');        
});
 












Route::get('/jobs', function ()  {

    //$jobs = Job::with('employer')->get();
    $jobs = Job::with('employer')->latest()->paginate(3)/*Simplepaginate(3)*/;


    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('job/create', function(){
    return view('jobs.create', );
});

Route::get('/job/{id}', function ($id) {

        $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function() {
    // dd(request()->all())
    // validation...

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});













Route::get('/project/{id}', function ($id) {
    $project = \App\Models\Project::with('uzers')->find($id);
    
    if (!$project) {
        abort(404);
    }
    
    return view('project', ['project' => $project]);
});


















Route::get('/contact', function () {
    return view('contact');
});