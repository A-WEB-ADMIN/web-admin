<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ismsp3 extends Model
{
    protected $table = "ismsp3s";

    protected $fillable = [
        "id",
        "domain",
        "sub_domain",
        "depth",
        "clause",
        "law"
    ];


}
