<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Flag_2_Controller extends Controller
{

    public function chart()
    {
        return view('diagnosis.flag_2.chart');
    }

    public function list()
    {
        return view('diagnosis.flag_2.list');
    }

}
