<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetCumstomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asset_cumstoms')->insert([
            'tab' => 'CUS_TAB_A',
            'code' => '',
            'cus_col_1' => 'A1',
            'cus_col_2' => 'A2',

            'company_id' => 2,
            'group_id' => 0,
            'tab_id' => 11,
        ]);

        DB::table('asset_cumstoms')->insert([
            'tab' => 'CUS_TAB_A',
            'code' => '',
            'cus_col_1' => 'A11',
            'cus_col_2' => 'A22',

            'company_id' => 2,
            'group_id' => 0,
            'tab_id' => 11,
        ]);

        DB::table('asset_cumstoms')->insert([
            'tab' => 'CUS_TAB_B',
            'code' => '',
            'cus_col_1' => 'B1',
            'cus_col_2' => 'B2',

            'company_id' => 2,
            'group_id' => 0,
            'tab_id' => 12,
        ]);

        DB::table('asset_cumstoms')->insert([
            'tab' => 'CUS_TAB_B',
            'code' => '',
            'cus_col_1' => 'B11',
            'cus_col_2' => 'B22',

            'company_id' => 2,
            'group_id' => 0,
            'tab_id' => 12,
        ]);
    }
}
