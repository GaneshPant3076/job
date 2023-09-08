<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request){

        $blogs=Blog::query();
        // if($search=$request->input('keyword')){
        //     $blogs=$blogs->where('title','like','%'.$search.'%')->orWhere('type','like','%'.$search.'%');
        // }
        $blogs=$blogs->with(['comments'])->get();
        // $blogs = Blog::all();
        // dd($blogs);
        return view('blog.index',compact('blogs'));

    }
    public function show($id) {
        // dd($id);

        $blog = Blog::find($id)->load(['comments']);


     return view('blog.detail',compact('blog'));

    }
}
