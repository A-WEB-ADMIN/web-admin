<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('standards')->insert([
            'name' => 'ISMS-P'
        ]);

        DB::table('standards')->insert([
            'name' => '주요정보통신기반시설'
        ]);

        DB::table('standards')->insert([
            'name' => '개인정보관리수준'
        ]);

        DB::table('standards')->insert([
            'name' => 'ISO27001'
        ]);

        DB::table('standards')->insert([
            'name' => 'GDPR'
        ]);

        DB::table('standards')->insert([
            'name' => 'CSA STAR'
        ]);

        DB::table('standards')->insert([
            'name' => 'HIPPA'
        ]);
    }
}
