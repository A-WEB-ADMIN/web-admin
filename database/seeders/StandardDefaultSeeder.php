<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandardDefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('standardsdefault')->insert([
            'name' => 'ISMS-P'
        ]);

        DB::table('standardsdefault')->insert([
            'name' => '주요정보통신기반시설'
        ]);

        DB::table('standardsdefault')->insert([
            'name' => '개인정보관리수준'
        ]);

        DB::table('standardsdefault')->insert([
            'name' => 'ISO27001'
        ]);

        DB::table('standardsdefault')->insert([
            'name' => 'GDPR'
        ]);

        DB::table('standardsdefault')->insert([
            'name' => 'CSA STAR'
        ]);

        DB::table('standardsdefault')->insert([
            'name' => 'HIPPA'
        ]);

    }
}
