<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\ApprovalLine;


class ApprovalLineRepogitory
{

    /*=================================================
    =
    =  1. [증적상세보기] 결재버튼 클릭 ->
    =
    ==================================================*/
    public function insert_to_approval_line($evidence_id, $document_id)
    {
        $user = auth()->user();
        $configs = DB::table('approval_lines_user_config')->where('configed_user_id', $user->id)->get();
        $draft_document_user_name = auth()->user()->name;

        foreach($configs as $config)
        {
            $approvalLine = new ApprovalLine();
            $approvalLine->evidence_id = $evidence_id;
            $approvalLine->document_id = $document_id;
            $approvalLine->receiver_id = $config->receiver_id;
            $approvalLine->receiver_name = $config->receiver_name;
            $approvalLine->message = $draft_document_user_name . "님의 결재요청입니다";
            $approvalLine->save();
        }

        $last_id = $approvalLine->id;

        return $last_id;
    }
    /*=========================================
    =
    =  2. [ UPDATE ] approval
    =
    =========================================*/
    public function update_approval($evidence_id, $document_id)
    {
        $approval_id = ApprovalLine::where('evidence_id', $evidence_id)->update([
            "document_id" => $document_id
        ]);

        return $approval_id;
    }
    /*=========================================
    =
    =  3. 결재할 상사의 user_id 를 가져온다
    =
    =========================================*/
    public function get_users_for_notification($document_id)
    {
        $arr = DB::table('approval_lines')->where('document_id', $document_id)->pluck('receiver_id');


        return $arr;
    }



}