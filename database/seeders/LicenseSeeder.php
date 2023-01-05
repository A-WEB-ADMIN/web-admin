<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 삼성
        DB::table('licenses')->insert([
            "company_id" => 1,
            "from_license_date" => "2000-01-01 00:00:00",
            "to_license_date" => "2001-01-01 00:00:00",
            "state" => "OLD"
        ]);

        // 삼성
        DB::table('licenses')->insert([
            "company_id" => 1,
            "from_license_date" => "2020-01-01 00:00:00",
            "to_license_date" => "2022-01-01 00:00:00",
            "state" => "NEW"
        ]);

        //현대
        DB::table('licenses')->insert([
            "company_id" => 2,
            "from_license_date" => "2021-02-01 00:00:00",
            "to_license_date" => "2022-02-01 00:00:00",
            "state" => "NEW"
        ]);

        //국정원
        DB::table('licenses')->insert([
            "company_id" => 3,
            "from_license_date" => "2021-03-01 00:00:00",
            "to_license_date" => "2022-03-01 00:00:00",
            "state" => "NEW"
        ]);

        //한국전력
        DB::table('licenses')->insert([
            "company_id" => 4,
            "from_license_date" => "2021-04-01 00:00:00",
            "to_license_date" => "2022-04-01 00:00:00",
            "state" => "NEW"
        ]);

        //카카오
        DB::table('licenses')->insert([
            "company_id" => 5,
            "from_license_date" => "2021-05-01 00:00:00",
            "to_license_date" => "2022-05-01 00:00:00",
            "state" => "NEW"
        ]);

        //배민
        DB::table('licenses')->insert([
            "company_id" => 6,
            "from_license_date" => "2021-06-01 00:00:00",
            "to_license_date" => "2022-06-01 00:00:00",
            "state" => "DELETE"
        ]);

    }
}
