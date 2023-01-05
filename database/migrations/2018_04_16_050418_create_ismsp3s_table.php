<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIsmsp3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ismsp3s', function (Blueprint $table) {
            $table->id();
            $table->string('domain');
            $table->string('sub_domain');
            $table->string('depth');
            $table->longText('clause');
            $table->longText('law');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ismsp3s');
    }
}
