<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*==============================================================
        =
        =  삼성
        =
        ===============================================================*/
        DB::table('package_company')->insert([
            "package_id" => 2,
            "company_id" => 1,
            "memo" => "삼성 작년",
            "state" => "OLD"
        ]);


        DB::table('package_company')->insert([
            "package_id" => 1,
            "company_id" => 1,
            "memo" => "삼성 올해",
            "state" => "NEW"
        ]);
        /*==============================================================
        =
        =  현대
        =
        ===============================================================*/
        DB::table('package_company')->insert([
            "package_id" => 2,
            "company_id" => 2,
            "memo" => "현대 올해",
            "state" => "NEW"
        ]);


        
    }
}
