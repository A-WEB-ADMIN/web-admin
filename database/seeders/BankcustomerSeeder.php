<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankcustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 삼성
        DB::table('bankcustomers')->insert([
            "company_id" => 1,
            "aegisecu_account_name" => "국민은행 111",
            "deposit_money" => 100000000,
            "deposit_date" => "2000-01-01 00:00:00",
            "due_date" => "2000-01-01 00:00:00",
            "state" => "완료",
            "created_at" => "2000-01-01 00:00:00"
        ]);

        DB::table('bankcustomers')->insert([
            "company_id" => 1,
            "aegisecu_account_name" => "국민은행 111",
            "deposit_money" => 100000000,
            "deposit_date" => "2019-12-30 00:00:00",
            "due_date" => "2019-12-30 00:00:00",
            "state" => "완료",
            "created_at" => "2019-12-30 00:00:00"
        ]);

        //현대
        DB::table('bankcustomers')->insert([
            "company_id" => 2,
            "aegisecu_account_name" => "우리은행 222",
            "deposit_money" => 50000000,
            "deposit_date" => "2021-02-01 00:00:00",
            "due_date" => "2021-02-01 00:00:00",
            "state" => "완료",
            "created_at" => "2021-02-01 00:00:00"
        ]);

        //국정원
        DB::table('bankcustomers')->insert([
            "company_id" => 3,
            "aegisecu_account_name" => "기업은행 333",
            "deposit_money" => 50000000,
            "deposit_date" => "2021-03-01 00:00:00",
            "due_date" => "2021-03-01 00:00:00",
            "state" => "완료",
            "created_at" => "2021-03-01 00:00:00"
        ]);

        //한국전력
        DB::table('bankcustomers')->insert([
            "company_id" => 4,
            "aegisecu_account_name" => "농협 444",
            "deposit_money" => 50000000,
            "deposit_date" => "2021-04-01 00:00:00",
            "due_date" => "2021-04-01 00:00:00",
            "state" => "완료",
            "created_at" => "2021-04-01 00:00:00"
        ]);

        //카카오
        DB::table('bankcustomers')->insert([
            "company_id" => 5,
            "aegisecu_account_name" => "신한 555",
            "deposit_money" => 50000000,
            "deposit_date" => "2021-05-01 00:00:00",
            "due_date" => "2021-05-01 00:00:00",
            "state" => "완료",
            "created_at" => "2021-05-01 00:00:00"

        ]);

        //배민
        DB::table('bankcustomers')->insert([
            "company_id" => 6,
            "aegisecu_account_name" => "부산은행 6",
            "deposit_money" => 50000000,
            "deposit_date" => "2021-06-01 00:00:00",
            "due_date" => "2021-06-01 00:00:00",
            "state" => "환불요청",
            "created_at" => "2021-06-01 00:00:00"
        ]);
    }
}
