<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            "code" => "YEAR_2",
            "name" => "2년",
            "price" => 20000000,
            "day_duration" => 730,
            "month_duration" => 0,
            "year_duration" => 0,
            "disk" => 20,
            "memo" => "저장소 기본 20GB",
            "is_deleted" => "USING"
        ]);

        DB::table('packages')->insert([
            "code" => "YEAR_1",
            "name" => "1년",
            "price" => 10000000,
            "day_duration" => 0,
            "month_duration" => 2,
            "year_duration" => 0,
            "disk" => 10,
            "memo" => "저장소 기본 10GB",
            "is_deleted" => "USING"
        ]);

    }
}
