<?php

namespace App\Http\Controllers\Convert;

use App\Http\Controllers\Controller;
use App\Models\Templatedefault;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Html2blobController extends Controller
{

    /*===============================================
    =
    =  1. 파일 올리기 폼
    =
    ================================================*/
    public function convert_form()
    {
        return view('convert.convert_form');
    }

    /*===============================================
    =
    =  2. insert_file
    =
    ================================================*/
    public function insert_file(Request $request)
    {
        $file = $request->file('myfile');

        $file_blob = $file->getContent();

        $origin_file_name = $file->getClientOriginalName();

        $only_name = pathinfo($origin_file_name, PATHINFO_FILENAME);



        $mime = $file->getMimeType();

        $last_id = DB::table('templatedefaults')->insertGetId([
            "name" => $only_name,
            "mime" => $mime,
            "file_blob" => $file_blob,
            "created_at" => now()
        ]);

        if($last_id)
        {
            return "SUCCESS";
        }
        else
        {
            return "FAIL";
        }
    }

    /*===============================================
    =
    =  2. list
    =
    ================================================*/
    public function html()
    {
        $templatedefault = Templatedefault::first();

        $html = $templatedefault->file_blob;

        //echo $html;

        return view('convert.html')->with('html', $html);
    }

}
