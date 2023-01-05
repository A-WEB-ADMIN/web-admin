<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiagnosisStateDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('diagnosis_states_default')->insert([
            "type" => "MANAGEMENT"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "PRIVACY"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "ISMS-P1"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "ISMS-P2"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "ISMS-P3"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "INFRA1"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "INFRA2"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "INFRA3"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "PML"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "ISO1"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "ISO1"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "ISO2"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "PRIVACY2"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "ISO27017/27018"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "ISO27018A"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "GDPR"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "HIPPA"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "WALLET"
        ]);

        DB::table('diagnosis_states_default')->insert([
            "type" => "ISO27701"
        ]);

    }
}
