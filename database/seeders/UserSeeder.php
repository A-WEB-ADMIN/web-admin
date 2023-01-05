<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '하하',
            'email' => 'haha@samsung.com',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => '박명수',
            'email' => 'park@samsung.com',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => '유재석',
            'email' => 'you@samsung.com',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => '삼성관리자 이병철',
            'email' => 'adminLEE@samsung.com',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => '이주일',
            'email' => 'lee@hyundai.com',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => '현대관리자 정주영',
            'email' => 'jung@hyundai.com',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => '김우중',
            'email' => 'kim@sales.com',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => '삼성 감사',
            'email' => 'samsung_audit@gov.com',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => '현대 감사',
            'email' => 'hyundai_audit@gov.com',
            'password' => bcrypt('1234')
        ]);

        DB::table('users')->insert([
            'name' => '슈퍼관리자',
            'email' => 'superadmin@aegisecu.com',
            'password' => bcrypt('1234')
        ]);


    }
}
