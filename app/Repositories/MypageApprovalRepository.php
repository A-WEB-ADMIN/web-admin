<?php
namespace App\Repositories;

use App\Models\ApprovalLine;

class MypageApprovalRepository
{

    /*===============================================
    =
    =
    =
    ================================================*/
    public function get_approvals()
    {
        $user = auth()->user();

        $approvals = ApprovalLine::with(['evidence', 'document'])->where('receiver_id', $user->id)->get();

        return $approvals;
    }
    /*===============================================
    =
    =
    =
    ================================================*/
    public function get_evidence($approval_id)
    {
        $approval = ApprovalLine::with(['evidence', 'document'])->where('id', $approval_id)->first();

        //dd($approval);

        return $approval;
    }



}