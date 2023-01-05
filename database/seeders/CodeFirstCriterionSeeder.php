<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CodeFirstCriterionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-00-",
            "depth" => "1.1~1.4",
            "domain" => "관리체계 수립 및 운영"
        ]);
        /*================================================
        =
        =  ISMS-01- 시작 지점
        =
        ================================================*/
        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-01-",
            "depth" => "2.1",
            "domain" => "정책, 조직, 자산 관리"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-02-",
            "depth" => "2.2",
            "domain" => "인적 보안"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-03-",
            "depth" => "2.3",
            "domain" => "외부자 보안"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-04-",
            "depth" => "2.4",
            "domain" => "물리 보안"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-05-",
            "depth" => "2.5",
            "domain" => "인증 및 권한관리"
        ]);
        
        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-06-",
            "depth" => "2.6",
            "domain" => "접근통제"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-07-",
            "depth" => "2.7",
            "domain" => "암호화 적용"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-08-",
            "depth" => "2.8",
            "domain" => "정보시스템 도입 및 개발보안"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-09-",
            "depth" => "2.9",
            "domain" => "시스템 및 서비스 운영관리"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-10-",
            "depth" => "2.10",
            "domain" => "시스템 및 서비스 보안관리"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-11-",
            "depth" => "2.11",
            "domain" => "사고 예방 및 대응"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-12-",
            "depth" => "2.12",
            "domain" => "재해복구"
        ]);
        /*================================================
        =
        =  ISMS-P-01- 시작 지점
        =
        ================================================*/

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-P-01-",
            "depth" => "3.1",
            "domain" => "개인정보 수집시 보호조치"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-P-02-",
            "depth" => "3.2",
            "domain" => "개인정보 보유 및 이용시 보호조치"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-P-03-",
            "depth" => "3.3",
            "domain" => "개인정보 제공시 보호조치"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-P-04-",
            "depth" => "3.4",
            "domain" => "개인정보 파기시 보호조치"
        ]);

        DB::table('code_first_criteria')->insert([
            "codeFirstPart" => "ISMS-P-05-",
            "depth" => "3.5",
            "domain" => "정보주체 권리보호"
        ]);
    }
}
