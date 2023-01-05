<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvidenceManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evidence_manager', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evidence_id')->nullable();
            $table->unsignedBigInteger('manager_id')->nullable();
            $table->string('manager_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evidence_manager');
    }
}
