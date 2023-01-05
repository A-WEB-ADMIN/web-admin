<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
        'company_id',
        'standard_id',
        'evidence_id',
        'name',
        'mime',
        'file_blob'
    ];
}
