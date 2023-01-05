<?php

namespace App\Repositories;

use App\Models\User;

class StandardRepository
{
    protected $req;

    /**
     *
     */
    public function __construct()
    {
    }

    /**=======================================
     *
     *
     *
     =======================================*/
    public function get_standards()
    {
        $result = User::find(auth()->id())->standards;
        return $result;
    }

    /**=======================================
     *
     *
     *
    =======================================*/
    public function getStandardId()
    {
        $result = User::find(auth()->id())->standards->first()->id;
        return $result;
    }



}