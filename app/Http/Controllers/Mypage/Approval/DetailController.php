<?php

namespace App\Http\Controllers\Mypage\Approval;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\MypageApprovalRepository;

class DetailController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
    }

    public function list(Request $req, MypageApprovalRepository $approvalRepo)
    {
        $approval_id = $req->input('approval_id');

        $approval = $approvalRepo->get_evidence($approval_id);

        return view('mypage.approval.detail')->with('approval', $approval);
    }




}
