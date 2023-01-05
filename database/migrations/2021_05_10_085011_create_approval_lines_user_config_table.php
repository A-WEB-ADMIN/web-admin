<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalLinesUserConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approval_lines_user_config', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('configed_user_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->integer('order')->nullable();
            $table->unsignedBigInteger('receiver_id');
            $table->string('receiver_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('approval_lines_user_config');
    }
}
