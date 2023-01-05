<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


         DB::table('companies')->insert([
             'code' => 'SS01',
             'name' => '삼성',
             "is_using" => "Y",
             'created_at' => "2019-12-30 00:00:00"
         ]);

        DB::table('companies')->insert([
            'code' => 'HD02',
            'name' => '현대',
            "is_using" => "Y",
            'created_at' => "2021-02-01 00:00:00"
        ]);

        DB::table('companies')->insert([
            'code' => 'NIS03',
            'name' => '국정원',
            "is_using" => "Y",
            'created_at' => "2021-03-01 00:00:00"
        ]);

        DB::table('companies')->insert([
            'code' => 'KE04',
            'name' => '한국전력',
            "is_using" => "Y",
            'created_at' => "2021-04-01 00:00:00"
        ]);

        DB::table('companies')->insert([
            'code' => 'CACAO05',
            'name' => '카카오',
            "is_using" => "Y",
            'created_at' => "2021-05-01 00:00:00"
        ]);

        DB::table('companies')->insert([
            'code' => 'BM06',
            'name' => '배민',
            "is_using" => "Y",
            'created_at' => "2021-06-01 00:00:00"
        ]);


    }
}
