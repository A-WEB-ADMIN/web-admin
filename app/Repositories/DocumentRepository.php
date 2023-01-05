<?php

namespace App\Repositories;

use App\Models\Document;
use Illuminate\Support\Facades\DB;

class DocumentRepository
{

    /*=========================================
    =
    =  1. INSERT document
    =
    ==========================================*/
    public function insert_document($evidence_id, $company_id, $subject)
    {
        $document = new Document();
        $document->evidence_id = $evidence_id;
        $document->user_id = auth()->user()->id;
        $document->user_name = auth()->user()->name;
        $document->company_id = $company_id;
        $document->status = "결재요청";
        $document->title = $subject;
        $document->content = "";
        $document->save();

        $last_id = $document->id;

        return $last_id;
    }


}