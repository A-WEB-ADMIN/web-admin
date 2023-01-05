<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColumnDefaultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('column_defaults')->insert([
            'tab' => 'SERVER',
            'column' => 'status',
            'column_korean' => '상태',
            'is_display' => true,
        ]);

        DB::table('column_defaults')->insert([
            'tab' => 'SERVER',
            'column' => 'type',
            'column_korean' => '구분',
            'is_display' => true,
        ]);

        DB::table('column_defaults')->insert([
            'tab' => 'SERVER',
            'column' => 'code',
            'column_korean' => '자산코드',
            'is_display' => true,
        ]);

        DB::table('column_defaults')->insert([
            'tab' => 'SERVER',
            'column' => 'alias_name',
            'column_korean' => 'Hostname',
            'is_display' => true,
        ]);

        DB::table('column_defaults')->insert([
            'tab' => 'SERVER',
            'column' => 'version',
            'column_korean' => 'Version',
            'is_display' => true,
        ]);
        /*=====================================================================
        =
        =   big_type = DB
        =
        ======================================================================*/
        DB::table('column_defaults')->insert([
            'tab' => 'DB',
            'column' => 'status',
            'column_korean' => 'DB상태',
            'is_display' => true,
        ]);

        DB::table('column_defaults')->insert([
            'tab' => 'DB',
            'column' => 'type',
            'column_korean' => 'DB구분',
            'is_display' => true,
        ]);

        DB::table('column_defaults')->insert([
            'tab' => 'DB',
            'column' => 'code',
            'column_korean' => 'DB자산코드',
            'is_display' => true,
        ]);

        DB::table('column_defaults')->insert([
            'tab' => 'DB',
            'column' => 'alias_name',
            'column_korean' => 'DBHostname',
            'is_display' => true,
        ]);

        DB::table('column_defaults')->insert([
            'tab' => 'DB',
            'column' => 'version',
            'column_korean' => 'DBversion',
            'is_display' => true,
        ]);
        /*================================
        = 현대에서 쓴다고 가정
        =================================*/
        DB::table('column_defaults')->insert([
            'tab' => 'CUS_TAB_A',
            'column' => 'cus_col_1',
            'column_korean' => '',
            'is_display' => true,
        ]);

        DB::table('column_defaults')->insert([
            'tab' => 'CUS_TAB_A',
            'column' => 'cus_col_2',
            'column_korean' => '',
            'is_display' => true,
        ]);

    }
}
