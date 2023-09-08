<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use Illuminate\Database\Eloquent\Builder;

class JobController extends Controller
{
    public function index(Request $request) {
        // $jobs = Job::all();
        // dd($jobs);
        $jobs=Job::query();

        if($search=$request->input('keyword')){
            $jobs= $jobs->where(function(Builder $query) use($search){
                $query->where('title','like','%'.$search.'%')->orWhere('description','like','%'.$search.'%');
            });
        }
        if($location=$request->input('location')){
            $jobs= $jobs->where('location','like','%'.$location.'%');
        }
        if($type=$request->input('type')){
            $jobs= $jobs->where('type','like','%'.$type.'%');
        }
        if($qualification=$request->input('qualification')){
            $jobs= $jobs->where('qualification','like',$qualification);
        }
        if($category=$request->input('category')){
                $jobs= $jobs->where('category','like',$category);}

        if($gender=$request->input('gender')){
            $jobs= $jobs->where('gender','like',$gender);}

            if($experiance=$request->input('experiance')){
                $jobs= $jobs->where('experiance','like','%'.$experiance.'%');}





        $jobs=$jobs->get();
        return view('job.index', compact('jobs'));
    }

    public function show($id) {
        // dd($id);
        $job = Job::find($id);

        return view('job.detail',compact('job'));
    }
}
