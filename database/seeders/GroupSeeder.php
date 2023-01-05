<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('groups')->insert([
            'name' => '삼성전자'
        ]);

        DB::table('groups')->insert([
            'name' => '삼성생명'
        ]);

        DB::table('groups')->insert([
            'name' => '현대자동차'
        ]);
        
    }
}
