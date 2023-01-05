<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Templatedefault extends Model
{
    protected $fillable = [
        'name',
        'mime',
        'file_blob',
    ];

}
