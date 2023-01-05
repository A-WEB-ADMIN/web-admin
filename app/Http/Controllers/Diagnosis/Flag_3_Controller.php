<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Flag_3_Controller extends Controller
{

    public function chart()
    {
        return view('diagnosis.flag_3.chart');
    }

    public function list()
    {
        return view('diagnosis.flag_3.list');
    }

}
