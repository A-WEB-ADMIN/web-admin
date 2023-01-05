<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiagnosisHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*===============================================
        =
        =  1. ISMS-P1 VERY OLD
        =
        ================================================*/
        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 1,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.1.1",
            "explanation" => "VERY OLD 1",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 2,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.1.2",
            "explanation" => "VERY OLD 2",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 3,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.2.1",
            "explanation" => "VERY OLD 3",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 4,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.2.2",
            "explanation" => "VERY OLD 4",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 5,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.3.1",
            "explanation" => "VERY OLD 5",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 6,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.3.2",
            "explanation" => "VERY OLD 6",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 7,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.3.3",
            "explanation" => "VERY OLD 7",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 8,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.4.1",
            "explanation" => "VERY OLD 8",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 9,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.4.2",
            "explanation" => "VERY OLD 9",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 10,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.4.3",
            "explanation" => "VERY OLD 10",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 11,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.5.1",
            "explanation" => "VERY OLD 11",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 12,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.5.2",
            "explanation" => "VERY OLD 12",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 13,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.5.3",
            "explanation" => "VERY OLD 13",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 14,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.5.4",
            "explanation" => "VERY OLD 14",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 15,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.6.1",
            "explanation" => "VERY OLD 15",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 16,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.6.2",
            "explanation" => "VERY OLD 16",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 17,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.1.6.3",
            "explanation" => "VERY OLD 17",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 18,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.1.1",
            "explanation" => "VERY OLD 18",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 19,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.1.2",
            "explanation" => "VERY OLD 19",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 20,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.1.3",
            "explanation" => "VERY OLD 20",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        /*===================================================================
        =
        =  21 번 부터
        =
        ===================================================================*/

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 21,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.2.1",
            "explanation" => "VERY OLD 21",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 22,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.2.2",
            "explanation" => "VERY OLD 22",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 23,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.2.3",
            "explanation" => "VERY OLD 23",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 24,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.3.1",
            "explanation" => "VERY OLD 24",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 25,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.3.2",
            "explanation" => "VERY OLD 25",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 26,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.3.3",
            "explanation" => "VERY OLD 26",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 27,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.3.4",
            "explanation" => "VERY OLD 27",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 28,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.3.5",
            "explanation" => "VERY OLD 28",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 29,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.4.1",
            "explanation" => "VERY OLD 29",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 30,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.2.4.2",
            "explanation" => "VERY OLD 30",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);



        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 31,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.3.1.1",
            "explanation" => "VERY OLD 31",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 32,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.3.1.2",
            "explanation" => "VERY OLD 32",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 33,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.3.2.1",
            "explanation" => "VERY OLD 33",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 34,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.3.2.2",
            "explanation" => "VERY OLD 34",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 35,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.3.3.1",
            "explanation" => "VERY OLD 35",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 36,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.3.3.2",
            "explanation" => "VERY OLD 36",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);





        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 37,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.4.1.1",
            "explanation" => "VERY OLD 37",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 38,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.4.1.2",
            "explanation" => "VERY OLD 38",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 39,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.4.2.1",
            "explanation" => "VERY OLD 39",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 40,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.4.2.2",
            "explanation" => "VERY OLD 40",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        /*===================================================================
        =
        =  41 번 부터
        =
        ===================================================================*/

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 41,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.4.3.1",
            "explanation" => "VERY OLD 41",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 42,
            "company_id" => 1,
            "type" => "ISMS-P1",
            "depth" => "1.4.3.2",
            "explanation" => "VERY OLD 42",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);



        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 43,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.1.1.1",
            "explanation" => "VERY OLD 43",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 44,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.1.1.2",
            "explanation" => "VERY OLD 44",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 45,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.1.1.3",
            "explanation" => "VERY OLD 45",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 46,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.1.1.4",
            "explanation" => "VERY OLD 46",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 47,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.1.1.1",
            "explanation" => "VERY OLD 47",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 48,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.1.2.1",
            "explanation" => "VERY OLD 48",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 49,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.1.2.2",
            "explanation" => "VERY OLD 49",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 50,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.1.3.1",
            "explanation" => "VERY OLD 50",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 51,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.1.3.2",
            "explanation" => "VERY OLD 51",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 52,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.1.1",
            "explanation" => "VERY OLD 52",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 53,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.1.2",
            "explanation" => "VERY OLD 53",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 54,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.1.3",
            "explanation" => "VERY OLD 54",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);




        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 55,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.1.4",
            "explanation" => "VERY OLD 55",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 56,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.2.1",
            "explanation" => "VERY OLD 56",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 57,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.2.2",
            "explanation" => "VERY OLD 57",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 58,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.3.1",
            "explanation" => "VERY OLD 58",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 59,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.3.2",
            "explanation" => "VERY OLD 59",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 60,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.3.3",
            "explanation" => "VERY OLD 60",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);
        /*===================================================================
        =
        =  61 번 부터
        =
        ===================================================================*/

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 61,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.3.4",
            "explanation" => "VERY OLD 61",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 62,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 62",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);


        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 63,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 63",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);


        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 64,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 64",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 65,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 65",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 66,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 66",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 67,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 67",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 68,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 68",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 69,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 69",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 70,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 70",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 71,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 71",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 72,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 72",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 73,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 73",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 74,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 74",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 75,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 75",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 76,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 76",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 77,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 77",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);


        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 78,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 78",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 79,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 79",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 80,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.2.4.1",
            "explanation" => "VERY OLD 80",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        /*===================================================================
        =
        =  81 번 부터
        =
        ===================================================================*/

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 81,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.1.1",
            "explanation" => "VERY OLD 81",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 82,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.1.2",
            "explanation" => "VERY OLD 82",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 83,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.2.1",
            "explanation" => "VERY OLD 83",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 84,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.2.2",
            "explanation" => "VERY OLD 84",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 85,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.3.1",
            "explanation" => "VERY OLD 85",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 86,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.3.2",
            "explanation" => "VERY OLD 86",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 87,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.3.3",
            "explanation" => "VERY OLD 87",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 88,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.4.1",
            "explanation" => "VERY OLD 88",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 89,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.4.2",
            "explanation" => "VERY OLD 89",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);


        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 90,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.5.1",
            "explanation" => "VERY OLD 90",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 91,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.5.2",
            "explanation" => "VERY OLD 91",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 92,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.6.1",
            "explanation" => "VERY OLD 92",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 93,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.6.2",
            "explanation" => "VERY OLD 93",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 94,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.7.1",
            "explanation" => "VERY OLD 94",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 95,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.7.2",
            "explanation" => "VERY OLD 95",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 96,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.4.7.3",
            "explanation" => "VERY OLD 96",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 97,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.1.1",
            "explanation" => "VERY OLD 97",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 98,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.1.2",
            "explanation" => "VERY OLD 98",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 99,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.1.3",
            "explanation" => "VERY OLD 99",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 100,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.2.1",
            "explanation" => "VERY OLD 100",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        /*===================================================================
        =
        =  101 번 부터
        =
        ===================================================================*/

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 101,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.2.2",
            "explanation" => "VERY OLD 101",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 102,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.3.1",
            "explanation" => "VERY OLD 102",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 103,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.3.2",
            "explanation" => "VERY OLD 103",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 104,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.4.1",
            "explanation" => "VERY OLD 104",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 105,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.4.2",
            "explanation" => "VERY OLD 105",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 106,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.5.1",
            "explanation" => "VERY OLD 106",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 107,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.5.2",
            "explanation" => "VERY OLD 107",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 108,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.6.1",
            "explanation" => "VERY OLD 1018",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 109,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.6.2",
            "explanation" => "VERY OLD 109",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 110,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.5.6.3",
            "explanation" => "VERY OLD 110",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 111,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.1.1",
            "explanation" => "VERY OLD 111",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 112,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.1.2",
            "explanation" => "VERY OLD 112",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);


        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 113,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.1.3",
            "explanation" => "VERY OLD 113",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 114,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.1.4",
            "explanation" => "VERY OLD 114",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 115,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.2.1",
            "explanation" => "VERY OLD 115",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 116,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.2.2",
            "explanation" => "VERY OLD 116",
            "grade_diagnosis" => "1",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 117,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.2.3",
            "explanation" => "VERY OLD 117",
            "grade_diagnosis" => "2",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 118,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.2.4",
            "explanation" => "VERY OLD 118",
            "grade_diagnosis" => "3",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 119,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.3.1",
            "explanation" => "VERY OLD 119",
            "grade_diagnosis" => "4",
            "created_at" => Carbon::now()->subMonth(24)
        ]);

        DB::table('diagnosis_histories')->insert([
            "ismsp4_id" => 120,
            "company_id" => 1,
            "type" => "ISMS-P2",
            "depth" => "2.6.3.2",
            "explanation" => "VERY OLD 120",
            "grade_diagnosis" => "5",
            "created_at" => Carbon::now()->subMonth(24)
        ]);


        /*===================================================================
        =
        =  121 번 부터
        =
        ===================================================================*/

    }
}
