<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvidenceIsmsp3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('evidence_ismsp3')->insert([
            "evidence_id" => 4,
            "ismsp3_id" => 61
        ]);

        DB::table('evidence_ismsp3')->insert([
            "evidence_id" => 4,
            "ismsp3_id" => 62
        ]);

    }
}
