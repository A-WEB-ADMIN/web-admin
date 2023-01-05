<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EvidenceManager extends Model
{
    protected $table = "evidence_manager";

    protected $fillable = [
        "evidence_id",
        "manager_id",
        "manager_name"
    ];



}
