<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BankaegisecuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('bankaegisecus')->insert([
            "aegisecu_account_name" => "국민은행 111"
        ]);

        DB::table('bankaegisecus')->insert([
            "aegisecu_account_name" => "우리은행 222"
        ]);

        DB::table('bankaegisecus')->insert([
            "aegisecu_account_name" => "농협 333"
        ]);

    }
}
