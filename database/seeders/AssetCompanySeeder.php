<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetCompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asset_companies')->insert([
            'asset_id'   => 1,
            'company_id' => 1,
            'tab_id' => 1
        ]);

        DB::table('asset_companies')->insert([
            'asset_id'   => 2,
            'company_id' => 1,
            'tab_id' => 1
        ]);

        DB::table('asset_companies')->insert([
            'asset_id'   => 3,
            'company_id' => 1,
            'tab_id' => 1
        ]);
    }
}
