<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('forms')->insert([
            "template_id" => "1",
            "name" => "정보보호관리체계 명세서"
        ]);

        DB::table('forms')->insert([
            "template_id" => "2",
            "name" => "정보보호 운영명세서"
        ]);

        DB::table('forms')->insert([
            "template_id" => "3",
            "name" => "정보서비스 업무 흐름도"
        ]);

        DB::table('forms')->insert([
            "template_id" => "4",
            "name" => "위험관리 계획서"
        ]);

        DB::table('forms')->insert([
            "template_id" => "5",
            "name" => "정보보호관리체계 명세서"
        ]);

        DB::table('forms')->insert([
            "template_id" => "6",
            "name" => "정보보호 운영명세서"
        ]);

        DB::table('forms')->insert([
            "template_id" => "7",
            "name" => "정보서비스 업무 흐름도"
        ]);

        DB::table('forms')->insert([
            "template_id" => "8",
            "name" => "정보보호 운영명세서"
        ]);

        DB::table('forms')->insert([
            "template_id" => "9",
            "name" => "정보서비스 업무흐름도"
        ]);

        DB::table('forms')->insert([
            "template_id" => "10",
            "name" => "위험관리 계획서"
        ]);

        DB::table('forms')->insert([
            "template_id" => "11",
            "name" => "정보보호관리체계 명세서"
        ]);

    }
}
