<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Column extends Model
{
    protected $fillable = [
        'tab',
        'name',
        'ordering',
        'size',
        'display'
    ];


}
