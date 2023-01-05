<?php

namespace App\Http\Controllers\Asset;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssetGroupController extends Controller
{

    public function edit()
    {

        return view('asset.group.edit');
    }
}
