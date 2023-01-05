<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'STAFF',
        ]);

        DB::table('roles')->insert([
            'name' => 'ADMIN',
        ]);

        DB::table('roles')->insert([
            'name' => 'FREELANCER',
        ]);

        DB::table('roles')->insert([
            'name' => 'AUDIT',
        ]);

        DB::table('roles')->insert([
            'name' => 'BACK_ADMIN',
        ]);

    }
}
