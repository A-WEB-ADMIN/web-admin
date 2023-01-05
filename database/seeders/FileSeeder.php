<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*===============================
        = 백업관리대장
        ================================*/
        DB::table('files')->insert([
            'company_id' => 1,
            'evidence_id' => 3,
            'type' => '',
            'name' => '승호_백업관리대장_1',
            'path' => '',
            'upload_at' => Carbon::now()->addMonth(-1),
            'size' => '100'

        ]);

        DB::table('files')->insert([
            'company_id' => 1,
            'evidence_id' => 3,
            'type' => '',
            'name' => '승호_백업관리대장_2',
            'path' => '',
            'upload_at' => Carbon::now(),
            'size' => '200'
        ]);
        /*===============================
        = 정보시스템 로그 점검결과
        ================================*/
        DB::table('files')->insert([
            'company_id' => 1,
            'evidence_id' => 4,
            'type' => '',
            'name' => '승호_정보시스템 로그 점검결과_1',
            'path' => '',
            'upload_at' => Carbon::now(),
            'size' => '300'
        ]);

        DB::table('files')->insert([
            'company_id' => 1,
            'evidence_id' => 4,
            'type' => '',
            'name' => '승호_정보시스템 로그 점검결과_2',
            'path' => '',
            'upload_at' => Carbon::now()->addMonth(1),
            'size' => '400'
        ]);

    }
}
