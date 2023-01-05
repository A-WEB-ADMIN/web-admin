<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operatingdocument extends Model
{
    protected $table = "operatingdocuments";

    protected $fillable = [
        "domain",
        "depth",
        "is_using",
        "current_situation"
    ];





}
