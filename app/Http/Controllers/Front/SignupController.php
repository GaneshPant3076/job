<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SignupController extends Controller
{
    public function index(){



        return view('RegLogin.signup');
    }
}
