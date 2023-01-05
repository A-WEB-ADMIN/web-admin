<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColumnSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*=====================================================================
        =
        =   삼성 서버 column
        =
        ======================================================================*/
        DB::table('columns')->insert([
            'tab_id' => 1,
            'tab' => 'SERVER',
            'column' => 'status',
            'column_korean' => '상태',
            'ordering' => 1,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);

        DB::table('columns')->insert([
            'tab_id' => 1,
            'tab' => 'SERVER',
            'column' => 'type',
            'column_korean' => '구분',
            'ordering' => 2,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);

        DB::table('columns')->insert([
            'tab_id' => 1,
            'tab' => 'SERVER',
            'column' => 'code',
            'column_korean' => '자산코드',
            'ordering' => 3,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);

        DB::table('columns')->insert([
            'tab_id' => 1,
            'tab' => 'SERVER',
            'column' => 'alias_name',
            'column_korean' => 'Hostname',
            'ordering' => 4,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);

        DB::table('columns')->insert([
            'tab_id' => 1,
            'tab' => 'SERVER',
            'column' => 'version',
            'column_korean' => 'Version',
            'ordering' => 5,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);
        /*=====================================================================
        =
        =   삼성 DB column
        =
        ======================================================================*/
        DB::table('columns')->insert([
            'tab_id' => 2,
            'tab' => 'DB',
            'column' => 'status',
            'column_korean' => 'DB상태',
            'ordering' => 1,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);

        DB::table('columns')->insert([
            'tab_id' => 2,
            'tab' => 'DB',
            'column' => 'type',
            'column_korean' => 'DB구분',
            'ordering' => 2,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);

        DB::table('columns')->insert([
            'tab_id' => 2,
            'tab' => 'DB',
            'column' => 'code',
            'column_korean' => 'DB자산코드',
            'ordering' => 3,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);

        DB::table('columns')->insert([
            'tab_id' => 2,
            'tab' => 'DB',
            'column' => 'alias_name',
            'column_korean' => 'DBHostname',
            'ordering' => 4,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);

        DB::table('columns')->insert([
            'tab_id' => 2,
            'tab' => 'DB',
            'column' => 'version',
            'column_korean' => 'DBVersion',
            'ordering' => 5,
            'size' => '100',
            'is_display' => true,
            'company_id' => 1
        ]);

        /*=====================================================================
        =
        =   현대 서버 column
        =
        ======================================================================*/
        DB::table('columns')->insert([
            'tab_id' => 11,
            'tab' => 'CUS_TAB_A',
            'column' => 'cus_col_1',
            'column_korean' => '장비 서버 위치',
            'ordering' => 1,
            'size' => '100',
            'is_display' => true,
            'company_id' => 2
        ]);

        DB::table('columns')->insert([
            'tab_id' => 11,
            'tab' => 'CUS_TAB_A',
            'column' => 'cus_col_2',
            'column_korean' => '장비 서버 관리자',
            'ordering' => 1,
            'size' => '100',
            'is_display' => true,
            'company_id' => 2
        ]);

        DB::table('columns')->insert([
            'tab_id' => 12,
            'tab' => 'CUS_TAB_B',
            'column' => 'cus_col_1',
            'column_korean' => '장비 DB 위치',
            'ordering' => 1,
            'size' => '100',
            'is_display' => true,
            'company_id' => 2
        ]);

        DB::table('columns')->insert([
            'tab_id' => 12,
            'tab' => 'CUS_TAB_B',
            'column' => 'cus_col_2',
            'column_korean' => '장비 DB 관리자',
            'ordering' => 1,
            'size' => '100',
            'is_display' => true,
            'company_id' => 2
        ]);
    }
}
