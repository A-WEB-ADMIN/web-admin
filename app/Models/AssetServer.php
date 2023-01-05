<?php

namespace App\Models;

use App\Models\contracts\Asset;
use Illuminate\Database\Eloquent\Model;

class AssetServer extends Model
{
    protected $fillable = [
        'tab',
        'status',
        'type',
        'code',
        'alias_name',
        'version',
        'ip'
    ];


}
