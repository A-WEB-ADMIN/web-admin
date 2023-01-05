<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIso27001sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iso27001s', function (Blueprint $table) {
            $table->char('depth')->index();


            $table->unsignedBigInteger('id')->index();


            $table->string('type');
            $table->string('domain');
            $table->string('title');
            $table->longText('clause');
            $table->longText('explain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('iso27001s');
    }
}
