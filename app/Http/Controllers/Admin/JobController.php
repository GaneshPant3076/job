<?php

namespace App\Http\Controllers\Admin;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\JobRequest;
use Illuminate\view\view;
use Alert;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs=Job::all();
        return view('admin.jobs.index',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobRequest $request)
    {
        Job::create($request->all());
        return redirect()->route('job.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job): view
    {
        return view('admin.jobs.show',compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job=Job::find($id);

        return view('admin.jobs.edit',compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobRequest $request,string $id)
    {
        $job=Job::find($id);
        // dd($request->all());
        $job->update($request->all());
        return redirect()->route('job.index');

//         $job->title =  $request->title;
//         $job->location =  $request->location;
//         $job->type =  $request->type;
//         $job->no_of_vacancy =  $request->no_of_vacancy;
//         $job->description =  $request->description;
//         $job->responsibility =  $request->responsibility;
//         $job->benefits =  $request->benefits;
//         $job->qualification =  $request->qualification;
//         $job->salary =  $request->salary;
//         $job->gender =  $request->gender;
//         $job->category =  $request->category;
//         $job->experiance =  $request->experiance;

//         $job->save();
// return redirect()->route('job.index');


        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {

        $job->delete();
        Alert::success('Success', 'Job deleted successfully')->showConfirmButton('OK');

        return redirect()->route('job.index');

    }
}
