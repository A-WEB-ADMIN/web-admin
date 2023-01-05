<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperatingdocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('operatingdocuments')->insert([
            "domain" => "2.9",
            "depth" => "2.9.4",
            "is_using" => "Y",
            "current_situation" => "▶ 주요 정보시스템에 대한 로그관리 절차가 수립·이행하고 있음. [승호 쇼핑몰]"
        ]);

        DB::table('operatingdocuments')->insert([
            "domain" => "2.9",
            "depth" => "2.9.5",
            "is_using" => "Y",
            "current_situation" => "▶ 매월 개인정보처리시스템의 접속기록을 점검하지 않음"
        ]);

    }
}
