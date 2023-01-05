<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->char('code')->nullable();
            $table->string('name')->nullable();
            $table->integer('price')->nullable();

            $table->integer('day_duration')->nullable();
            $table->integer('month_duration')->nullable();
            $table->integer('year_duration')->nullable();

            $table->float('disk')->nullable();
            $table->string('memo')->nullable();

            $table->char('is_deleted')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
}
