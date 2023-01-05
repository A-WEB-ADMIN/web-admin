<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = "documents";

    protected $fillable = [
        "evidence_id",
        "user_id",
        "company_id",
        "order_step",
        "status",
        "title",
        "content"
    ];




}
