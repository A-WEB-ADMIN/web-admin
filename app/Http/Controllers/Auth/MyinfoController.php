<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyinfoController extends Controller
{

    public function config()
    {
        return view('auth.myinfo.config');
    }
}
