<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*===========================================================
        =
        =  삼성
        =
        ============================================================*/
        DB::table('storages')->insert([
            "company_id" => 1,
            "name" => "10기가",
            "disk" => 10,
            "used_disk" => 8.5,
            "state" => "OLD",
        ]);

        DB::table('storages')->insert([
            "company_id" => 1,
            "name" => "20기가",
            "disk" => 20,
            "used_disk" => 3.5,
            "state" => "NEW",
        ]);

        /*===========================================================
        =
        =  현대
        =
        ============================================================*/
        DB::table('storages')->insert([
            "company_id" => 2,
            "name" => "10가",
            "disk" => 10,
            "used_disk" => 1.2,
            "state" => "NEW",
        ]);
    }
}
