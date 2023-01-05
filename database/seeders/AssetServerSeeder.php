<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssetServerSeeder extends Seeder
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
        =  1. 삼성전자
        =
        ====================================================== */
        /*-------------
        - A.
        --------------*/
        DB::table('asset_servers')->insert([
            'tab' => 'SERVER',
            'status' => '삼성운영',
            'type' => 'linux',
            'code' => 'AA01',
            'alias_name' => 'sumsung_electric.com',
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
            'tab_id' => 1
        ]);

        DB::table('asset_servers')->insert([
            'tab' => 'SERVER',
            'status' => '삼성운영',
            'type' => 'linux',
            'code' => 'AA02',
            'alias_name' => 'localhost',
            'version' => 'centos 2',
            'ip' => '111.222.111.111',
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
            'tab_id' => 1
        ]);
        /*======================================================
        =
        =  2 삼성생명
        =
        ====================================================== */
        DB::table('asset_servers')->insert([
            'tab' => 'SERVER',
            'status' => '운영',
            'type' => 'solalis',
            'code' => 'ab01',
            'alias_name' => '삼성생명.com',
            'version' => 'centos 3',
            'ip' => '111.333.111.111',
            'purpose' => '운영서버',
            'location' => '여의도',
            'manager' => '이부진',
            'admin' => '이부진',
            'department' => '전산팀',
            'confidentiality' => 1,
            'integrity' => 1,
            'availability' => 1,
            'tech' => 'Y',
            'is_diagnosis' => 'Y',
            'company_id' => 1,
            'group_id' => 1,
            'tab_id' => 1
        ]);


    }
}
