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
    return view('jobs', [
        'jobs' => Job::all()
    ]);
});




Route::get('/job/{id}', function ($id) {

        $job = Job::find($id);

    return view('job', ['job' => $job]);
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