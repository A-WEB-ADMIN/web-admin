<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnoses', function (Blueprint $table) {
            $table->id();

            $table->char('depth')->nullable();

            $table->unsignedBigInteger('ismsp4_id');
            $table->unsignedBigInteger('company_id');

            $table->string('type')->nullable();
            $table->string('version')->nullable();
            $table->text('explanation')->nullable();
            $table->char('grade')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnoses');
    }
}
