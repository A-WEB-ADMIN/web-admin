<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiagnosisStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diagnosis_states')->insert([
            "company_id" => "1",
            "type" => "ISMS-P1",
            "state" => "NEW"
        ]);
    }
}
