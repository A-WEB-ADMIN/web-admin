<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*===========================================
        =
        =  2. 진단
        =
        ============================================*/
        /*---------------
        - 1_ ISMS-P
        ---------------*/
        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => '관리체계 수립 및 운영',
            'href' => '/diagnosis/flag_1/chart',
            'standard_id' => 1,
            'type' => 'ISMS-P1',
            'domain' => '전체'
        ]);

        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => '보호대책 요구사항',
            'href' => '/diagnosis/flag_2/chart',
            'standard_id' => 1,
            'type' => 'ISMS-P2',
            'domain' => '전체'
        ]);

        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => '개인정보 처리 단계별 요구사항',
            'href' => '/diagnosis/flag_3/chart',
            'standard_id' => 1,
            'type' => 'ISMS-P3',
            'domain' => '전체'
        ]);

        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => '가상자산보안',
            'href' => '',
            'standard_id' => 1,
            'domain' => '전체'
        ]);

        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => '기술적 진단',
            'href' => '/diagnosis/tech/chart',
            'standard_id' => 1,
            'domain' => '전체'
        ]);

        /*---------------
        - 4_ ISO27001
        ---------------*/
        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => '요구사항',
            'href' => '',
            'standard_id' => 4,
            'domain' => ''
        ]);

        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => 'ISO27001 통제항목',
            'href' => '',
            'standard_id' => 4,
            'domain' => ''
        ]);

        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => 'ISO27017 / ISO27018',
            'href' => '',
            'standard_id' => 4,
            'domain' => ''
        ]);

        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => 'ISO 27018 부속서',
            'href' => '',
            'standard_id' => 4,
            'domain' => ''
        ]);

        DB::table('menus')->insert([
            'category' => '진단관리',
            'menu' => 'ISO27701',
            'href' => '',
            'standard_id' => 4,
            'domain' => ''
        ]);
        /*===========================================
        =
        =  증적
        =
        ============================================*/
        /*---------------
        - 1_ ISMS-P
        ---------------*/
        DB::table('menus')->insert([
            'category' => '증적관리',
            'menu' => '증적목록',
            'href' => '/evidence/main/list',
            'standard_id' => 1,
            'domain' => ''
        ]);

        DB::table('menus')->insert([
            'category' => '증적관리',
            'menu' => '운영명세서',
            'href' => '/evidence/operatingdocument/list',
            'standard_id' => 1,
            'domain' => ''
        ]);

        /*---------------
        - 4_ ISO27001
        ---------------*/
        DB::table('menus')->insert([
            'category' => '증적관리',
            'menu' => '증적목록',
            'href' => '',
            'standard_id' => 4,
            'domain' => ''
        ]);

        DB::table('menus')->insert([
            'category' => '증적관리',
            'menu' => '적용성(SoA)보고서',
            'href' => '',
            'standard_id' => 4,
            'domain' => ''
        ]);
        
    }






}



















