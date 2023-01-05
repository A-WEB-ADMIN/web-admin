<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class Ismsp4Repository
{

    public function get_count_ISMS_P1_from_ismsp4s()
    {
        $isms_p1_count = DB::table('ismsp4s')->where('type', 'ISMS-P1')->count();

        return $isms_p1_count;
    }

}