<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*====================================================
        =
        =   0. 정책
        =
        ====================================================*/
        DB::table('permissions')->insert([
            "name" => "list-policy"
        ]);
        /*====================================================
        =
        =   1. 자산
        =
        ====================================================*/
        DB::table('permissions')->insert([
            "name" => "list-asset"
        ]);

        DB::table('permissions')->insert([
            "name" => "edit-asset"
        ]);

        DB::table('permissions')->insert([
            "name" => "download-asset"
        ]);

        DB::table('permissions')->insert([
            "name" => "list-network"
        ]);

        DB::table('permissions')->insert([
            "name" => "edit-network"
        ]);
        /*====================================================
        =
        =   2. 진단
        =
        ====================================================*/
        DB::table('permissions')->insert([
            "name" => "list-flag_1_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "edit-flag_1_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "download-flag_1_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "list-flag_2_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "edit-flag_2_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "download-flag_2_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "list-flag_3_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "edit-flag_3_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "download-flag_3_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "list-flag_4_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "edit-flag_4_diagnosis"
        ]);

        DB::table('permissions')->insert([
            "name" => "download-flag_4_diagnosis"
        ]);

        /*====================================================
        =
        =   3. 위험
        =
        ====================================================*/
        /*-------------------
        - 위험분석
        -------------------*/
        DB::table('permissions')->insert([
            "name" => "list-risk-analysis"
        ]);


        DB::table('permissions')->insert([
            "name" => "download-risk-analysis"
        ]);
        /*-------------------
        - 위험평가
        -------------------*/
        DB::table('permissions')->insert([
            "name" => "list-risk-risk-assessment"
        ]);


        DB::table('permissions')->insert([
            "name" => "download-risk-risk-assessment"
        ]);
        /*-------------------
        - 위험관리수준
        -------------------*/
        DB::table('permissions')->insert([
            "name" => "list-risk-management-level"
        ]);


        DB::table('permissions')->insert([
            "name" => "edit-risk-management-level"
        ]);
        /*-------------------
        - 정보보호계획
        -------------------*/
        DB::table('permissions')->insert([
            "name" => "list-information-protection-plan"
        ]);


        DB::table('permissions')->insert([
            "name" => "edit-information-protection-plan"
        ]);

        DB::table('permissions')->insert([
            "name" => "download-information-protection-plan"
        ]);
        /*====================================================
        =
        =   4. 증적
        =
        ====================================================*/
        /*-------------------
        - 증적몰록
        -------------------*/
        DB::table('permissions')->insert([
            "name" => "list-evidence"
        ]);

        DB::table('permissions')->insert([
            "name" => "edit-evidence"
        ]);

        DB::table('permissions')->insert([
            "name" => "download-evidence"
        ]);
        /*-------------------
        - 운영명세서
        -------------------*/
        DB::table('permissions')->insert([
            "name" => "list-operation-report"
        ]);

        DB::table('permissions')->insert([
            "name" => "edit-operation-report"
        ]);

        DB::table('permissions')->insert([
            "name" => "download-operation-report"
        ]);


    }








































}
