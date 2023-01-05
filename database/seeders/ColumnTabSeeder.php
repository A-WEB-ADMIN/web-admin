<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColumnTabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*===================================================
        =
        =  삼성 서버
        =
        ===================================================*/
        DB::table('column_tab')->insert([
            'column_id' => 1,
            'tab_id' => 1
        ]);

        DB::table('column_tab')->insert([
            'column_id' => 2,
            'tab_id' => 1
        ]);

        DB::table('column_tab')->insert([
            'column_id' => 3,
            'tab_id' => 1
        ]);

        DB::table('column_tab')->insert([
            'column_id' => 4,
            'tab_id' => 1
        ]);

        DB::table('column_tab')->insert([
            'column_id' => 5,
            'tab_id' => 1
        ]);
        /*===================================================
        =
        =  삼성 DB
        =
        ===================================================*/
        DB::table('column_tab')->insert([
            'column_id' => 6,
            'tab_id' => 2
        ]);

        DB::table('column_tab')->insert([
            'column_id' => 7,
            'tab_id' => 2
        ]);

        DB::table('column_tab')->insert([
            'column_id' => 8,
            'tab_id' => 2
        ]);

        DB::table('column_tab')->insert([
            'column_id' => 9,
            'tab_id' => 2
        ]);

        DB::table('column_tab')->insert([
            'column_id' => 10,
            'tab_id' => 2
        ]);
        /*===================================================
        =
        =  커스텀 ColumnTab
        =
        ===================================================*/
        DB::table('column_tab')->insert([
            'column_id' => 11,
            'tab_id' => 11
        ]);
        DB::table('column_tab')->insert([
            'column_id' => 12,
            'tab_id' => 11
        ]);

        DB::table('column_tab')->insert([
            'column_id' => 13,
            'tab_id' => 12
        ]);
        DB::table('column_tab')->insert([
            'column_id' => 14,
            'tab_id' => 12
        ]);
    }
}
