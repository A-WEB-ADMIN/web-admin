<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetDbSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*======================================================
        =
        =  1. 삼성 DB
        =
        ====================================================== */
        /*-------------
        - A.삼성전자
        --------------*/
        DB::table('asset_dbs')->insert([
            'tab' => 'DB',
            'status' => 'DB 삼성운영',
            'type' => '오라클',
            'code' => 'BB01',
            'name' => 'sumsung_electric.com',
            'version' => 'centos 1',
            'ip' => '111.111.111.111',
            'purpose' => '운영서버',
            'location' => '강남본사',
            'manager' => '이재용',
            'admin' => '이건희',
            'department' => '전산팀',
            'confidentiality' => 1,
            'integrity' => 1,
            'availability' => 1,
            'tech' => 'Y',
            'is_diagnosis' => 'Y',
            'company_id' => 1,
            'group_id' => 1,
            'tab_id' => 2,
        ]);



    }
}
