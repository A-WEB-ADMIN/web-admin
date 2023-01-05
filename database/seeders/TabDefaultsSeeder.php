<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabDefaultsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tab_defaults')->insert([
            'tab' => 'SERVER',
            'tab_korean' => '서버시스템',
            'explanation' => '서버에 대한 사항',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'DB',
            'tab_korean' => 'DBMS',
            'explanation' => 'DB에 대한 사항',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'WEB',
            'tab_korean' => 'Web',
            'explanation' => '업무를 위하여 대/내외적으로 사용되고 있는 WEB/WAS 시스템',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'APP',
            'tab_korean' => '안드로이드 APP',
            'explanation' => '서비스 제공 및 업무 수행 목적으로 개발/구축한 웹 어플리케이션 도메인 (웹사이트 등의 프로그램)',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'NETWORK',
            'tab_korean' => '네트워크',
            'explanation' => '라우터, 스위치 등 서비스 운영 및 제반 업무를 위해 설치된 네트워크 장비',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'SECURITY',
            'tab_korean' => '정보보호시스템',
            'explanation' => '서비스 보안 운영을 위한 방화벽, IDS 및 DDoS 대응 등의 보안 장비',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'PC',
            'tab_korean' => '단말기',
            'explanation' => '업무 수행 목적으로 정보를 처리하는 단말기 (PC, 노트북 등의 이동형 단말기)',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'SOFTWARE',
            'tab_korean' => '소프트웨어',
            'explanation' => '서비스 운영 및 업무 수행 목적으로 사용되는 소프트웨어 패키지 (개발, DBMS 및 업무용 Utility 등의 프로그램)',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'DOCUMENT',
            'tab_korean' => '문서',
            'explanation' => '정보보호 및 서비스를 위한 보안운영 상에서 발생하는 사내 정책/지침/매뉴얼, 보고서, 관리대장 등을 포함한 문서',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'FACILITY',
            'tab_korean' => '부대시설',
            'explanation' => '각종 시스템 및 네트워크 장비의 운영을 지원하기 위한 물리적 자원 (발전기, UPS, 항온항습기 및 출입통제시스템 등의 장비)',
            'is_display' => true,
            'type' => 'DEFAULT'
        ]);

        /*====================================
        = 커스텀 Tab default
        ====================================*/
        DB::table('tab_defaults')->insert([
            'tab' => 'CUS_TAB_A',
            'tab_korean' => '',
            'explanation' => '',
            'is_display' => true,
            'type' => 'CUSTOM'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'CUS_TAB_B',
            'tab_korean' => '',
            'explanation' => '',
            'is_display' => true,
            'type' => 'CUSTOM'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'CUS_TAB_C',
            'tab_korean' => '',
            'is_display' => true,
            'type' => 'CUSTOM'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'CUS_TAB_D',
            'tab_korean' => '',
            'is_display' => true,
            'type' => 'CUSTOM'
        ]);

        DB::table('tab_defaults')->insert([
            'tab' => 'CUS_TAB_E',
            'tab_korean' => '',
            'is_display' => true,
            'type' => 'CUSTOM'
        ]);
    }
}
