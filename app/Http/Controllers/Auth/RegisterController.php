<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function step1()
    {
        return view('auth.register.step1');
    }

    public function step2()
    {
        return view('auth.register.step2');
    }

    public function step3()
    {
        return view('auth.register.step3');
    }

}
