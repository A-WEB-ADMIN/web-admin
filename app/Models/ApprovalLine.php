<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ApprovalLine extends Model
{
    protected $table = "approval_lines";

    protected $fillable = [
        "evidence_id",
        "document_id",
        "company_id",
        "order",
        "user_id",
        "name",
        "status"
    ];

    /**=======================================================
     *
     *  <== [방향]
     *
     *  private $evidence
     *  @ManyToOne
     *
    ========================================================*/
    public function evidence()
    {
        return $this->belongsTo(Evidence::class,'evidence_id','id');
    }

    /**=======================================================
     *
     *  <== [방향]
     *
     *  private $document
     *  @ManyToOne
     *
    ========================================================*/
    public function document()
    {
        return $this->belongsTo(Document::class, 'document_id', 'id');
    }




}
