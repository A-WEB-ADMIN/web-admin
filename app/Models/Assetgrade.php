<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assetgrade extends Model
{
    protected $fillable = [
        'theatgrade_id',
        'threadcode',
        'type',
        'domain',
        'depth',
        'clause',
        'grade',
        'risk',
        'protection_plan'
    ];



}
