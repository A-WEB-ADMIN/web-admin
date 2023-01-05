<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Threatgrade extends Model
{

    /*========================================
    =
    =  * company_id  추가 해야함
    =
    =========================================*/


    protected $fillable = [
        'code',
        'domain',
        'subdomain',
        'explanation',
        'confidentiality',
        'integrity',
        'availability'
    ];


}
