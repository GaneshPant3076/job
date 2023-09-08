<?php

namespace App\Http\Controllers\Front;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Front\CommentRequest;

class CommentController extends Controller
{
    public function store(CommentRequest $request){
        // dd('here');
        // dd($request->all());
        Comment::create($request->all());

        return redirect()->back();

    }
}
