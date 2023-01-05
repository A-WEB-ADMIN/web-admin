<?php

namespace App\Http\Controllers\Mypage\Approval;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\MypageApprovalRepository;

class MainController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
    }
    /*=========================================================================
    =
    =
    =
    ==========================================================================*/
    public function list(MypageApprovalRepository $mypageApprovalRepo)
    {
        $approvals = $mypageApprovalRepo->get_approvals();

        return view('mypage.approval.list')->with('approvals', $approvals);
    }


}
