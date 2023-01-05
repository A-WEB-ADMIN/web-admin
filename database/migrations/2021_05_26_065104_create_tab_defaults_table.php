<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabDefaultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tab_defaults', function (Blueprint $table) {
            $table->id();
            $table->string('tab');
            $table->string('tab_korean')->nullable();
            $table->string('explanation')->nullable();
            $table->boolean('is_display')->nullable();
            $table->char('type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tab_defaults');
    }
}
