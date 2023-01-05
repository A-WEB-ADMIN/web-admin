<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('tab_company')->insert([
            'tab_id' =>  1,
            'company_id' => 1
        ]);

        DB::table('tab_company')->insert([
            'tab_id' =>  2,
            'company_id' => 1
        ]);

        DB::table('tab_company')->insert([
            'tab_id' =>  3,
            'company_id' => 1
        ]);

        DB::table('tab_company')->insert([
            'tab_id' =>  4,
            'company_id' => 1
        ]);

        DB::table('tab_company')->insert([
            'tab_id' =>  5,
            'company_id' => 1
        ]);

        DB::table('tab_company')->insert([
            'tab_id' =>  11,
            'company_id' => 2
        ]);

        DB::table('tab_company')->insert([
            'tab_id' =>  12,
            'company_id' => 2
        ]);

    }
}
