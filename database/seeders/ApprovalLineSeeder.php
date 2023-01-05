<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApprovalLineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('approval_lines')->insert([
            "receiver_id" => "2",
            "message" => "박명수에게 보고"
        ]);


        DB::table('approval_lines')->insert([
            "receiver_id" => "4",
            "message" => "이병철 회장님에게 보고"
        ]);

    }
}
