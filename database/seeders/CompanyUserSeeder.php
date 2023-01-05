<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*=============================
        =  삼성
        =============================*/
        DB::table('company_user')->insert([
            'user_id' => 1,
            'company_id' => 1
        ]);

        DB::table('company_user')->insert([
            'user_id' => 2,
            'company_id' => 1
        ]);

        DB::table('company_user')->insert([
            'user_id' => 3,
            'company_id' => 1
        ]);

        DB::table('company_user')->insert([
            'user_id' => 4,
            'company_id' => 1
        ]);
        /*=============================
        =  현대
        =============================*/
        DB::table('company_user')->insert([
            'user_id' => 5,
            'company_id' => 2
        ]);

        DB::table('company_user')->insert([
            'user_id' => 6,
            'company_id' => 2
        ]);
        /*=============================
        =  프리랜서
        =============================*/
        DB::table('company_user')->insert([
            'user_id' => 7,
            'company_id' => 1
        ]);

        DB::table('company_user')->insert([
            'user_id' => 7,
            'company_id' => 2
        ]);
        /*=============================
        =  감사
        =============================*/
        DB::table('company_user')->insert([
            'user_id' => 8,
            'company_id' => 1
        ]);

        DB::table('company_user')->insert([
            'user_id' => 9,
            'company_id' => 2
        ]);
        /*=============================
        =  슈퍼관리자
        =============================*/
        DB::table('company_user')->insert([
            'user_id' => 10,
            'company_id' => 1
        ]);
    }
}
