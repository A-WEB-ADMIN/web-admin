<?php

namespace App\Http\Controllers\Evidence;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\OperatingDocumentRepository;

class OperatingDocumentController extends Controller
{

    /**
     * 생성자
     */
    public function __construct()
    {
    }
    /*===================================================
    =
    =  1. list
    =
    ====================================================*/
    public function list(Request $req, OperatingDocumentRepository $operatingDocumentRepo)
    {
        $ismsp3_and_operatings = $operatingDocumentRepo->get_ismsp3_and_operating();

        return view('evidence.operatingdocument.list')->with('ismsp3_and_operatings', $ismsp3_and_operatings);
    }
    /*===================================================
    =
    =
    =
    ====================================================*/




}
