<?php

namespace App\Http\Controllers\Diagnosis;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tech_Controller extends Controller
{

    public function chart()
    {
        return view('diagnosis.tech.chart');
    }

    public function list()
    {
        return view('diagnosis.tech.list');
    }

}
