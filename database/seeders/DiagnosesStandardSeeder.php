<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiagnosesStandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('diagnoses_standards')->insert([
            "type" => "MANAGEMENT"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "PRIVACY"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "ISMS-P1"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "ISMS-P2"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "ISMS-P3"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "INFRA1"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "INFRA2"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "INFRA3"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "PML"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "ISO1"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "ISO1"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "ISO2"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "PRIVACY2"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "ISO27017/27018"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "ISO27018A"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "GDPR"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "HIPPA"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "WALLET"
        ]);

        DB::table('diagnoses_standards')->insert([
            "type" => "ISO27701"
        ]);

    }
}
