<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StandardCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**===============================================
         *
         *  μΌμ±
         *
        =================================================*/
        DB::table('standard_company')->insert([
            'company_id' =>  1,
            'standard_id' => 1
        ]);

        DB::table('standard_company')->insert([
            'company_id' =>  1,
            'standard_id' => 4
        ]);

        /**===============================================
         *
         *  νλ
         *
        =================================================*/
        DB::table('standard_company')->insert([
            'company_id' =>  2,
            'standard_id' => 2
        ]);

        DB::table('standard_company')->insert([
            'company_id' =>  2,
            'standard_id' => 3
        ]);
    }
}
