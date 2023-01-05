<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EvidenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('evidences')->insert([
            'company_id' => 1,
            'standard_id' => 1,
            'CODE'     => 'ISMS-09-01',
            'subject'  => '정보시스템 도입 계획서',
            'content'  => '내용1',
            'field_inspection' => '',
            'cycle'    => 0,
            'created_at' => Carbon::now()->addMonth(-3)
        ]);

        DB::table('evidences')->insert([
            'company_id' => 1,
            'standard_id' => 1,
            'CODE'     => 'ISMS-09-02',
            'subject'  => '장애대응 보고서',
            'content'  => '내용2',
            'field_inspection' => '',
            'cycle'    => 0,
            'created_at' => Carbon::now()->addMonth(-2)
        ]);

        DB::table('evidences')->insert([
            'company_id' => 1,
            'standard_id' => 1,
            'CODE'     => 'ISMS-09-03',
            'subject'  => '백업관리대장',
            'content'  => '내용3',
            'field_inspection' => '',
            'cycle'    => 0,
            'created_at' => Carbon::now()->addMonth(-1)
        ]);

        DB::table('evidences')->insert([
            'company_id' => 1,
            'standard_id' => 1,
            'CODE'     => 'ISMS-09-04',
            'subject'  => '정보시스템 로그 점검결과',
            'content'  => '내용4',
            'field_inspection' => '',
            'cycle'    => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('evidences')->insert([
            'company_id' => 1,
            'standard_id' => 1,
            'CODE'     => 'ISMS-09-05',
            'subject'  => '개인정보처리시스템 접속기록 점검결과',
            'content'  => '내용5',
            'field_inspection' => '',
            'cycle'    => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('evidences')->insert([
            'company_id' => 1,
            'standard_id' => 1,
            'CODE'     => 'ISMS-09-06',
            'subject'  => '저장매체 폐기 관리대장',
            'content'  => '내용6',
            'field_inspection' => '',
            'cycle'    => 0,
            'created_at' => Carbon::now()
        ]);

        DB::table('evidences')->insert([
            'company_id' => 1,
            'standard_id' => 1,
            'CODE'     => 'ISMS-09-07',
            'subject'  => '복구테스트 수행 결과',
            'content'  => '내용7',
            'field_inspection' => '',
            'cycle'    => 0,
            'created_at' => Carbon::now()
        ]);
    }
}
