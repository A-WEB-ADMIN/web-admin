<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsmsp4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ismsp4s', function (Blueprint $table) {
            $table->char('depth');
            $table->primary('depth');


            $table->unsignedBigInteger('id')->index();


            $table->string('type');
            $table->string('domain');
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
        Schema::dropIfExists('ismsp4s');
    }
}
