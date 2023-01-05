<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tabs')->insert([
            'tab' => 'SERVER',
            'tab_korean' => '서버시스템',
            'ordering' => 1,
            'is_display' => true,
        ]);

        DB::table('tabs')->insert([
            'tab' => 'DB',
            'tab_korean' => 'DBMS',
            'ordering' => 2,
            'is_display' => true,
        ]);

        DB::table('tabs')->insert([
            'tab' => 'WEB',
            'tab_korean' => 'WEB',
            'ordering' => 3,
            'is_display' => true,
        ]);

        DB::table('tabs')->insert([
            'tab' => 'APP',
            'tab_korean' => '안드로이드 APP',
            'ordering' => 9,
            'is_display' => true,
        ]);

        DB::table('tabs')->insert([
            'tab' => 'NETWORK',
            'tab_korean' => '네트워크',
            'ordering' => 5,
            'is_display' => true,
        ]);

        DB::table('tabs')->insert([
            'tab' => 'SECURITY',
            'tab_korean' => '정보보호시스템',
            'ordering' => 7,
            'is_display' => true,
        ]);

        DB::table('tabs')->insert([
            'tab' => 'PC',
            'tab_korean' => '단말기',
            'ordering' => 8,
            'is_display' => true,
        ]);

        DB::table('tabs')->insert([
            'tab' => 'SOFTWARE',
            'tab_korean' => '소프트웨어',
            'ordering' => 4,
            'is_display' => true,
        ]);

        DB::table('tabs')->insert([
            'tab' => 'DOCUMENT',
            'tab_korean' => '문서',
            'ordering' => 9,
            'is_display' => true,
        ]);

        DB::table('tabs')->insert([
            'tab' => 'FACILITY',
            'tab_korean' => '부대시설',
            'ordering' => 6,
            'is_display' => true,
        ]);

        /*========================
        = 커스텀 Tab
        ========================*/
        DB::table('tabs')->insert([
            'tab' => 'CUS_TAB_A',
            'tab_korean' => '자동화 생산장비 서버',
            'ordering' => 9,
            'is_display' => true,
        ]);
        DB::table('tabs')->insert([
            'tab' => 'CUS_TAB_B',
            'tab_korean' => '자동화 생산장비 DB',
            'ordering' => 9,
            'is_display' => true,
        ]);
    }
}
