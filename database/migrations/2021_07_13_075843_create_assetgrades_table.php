<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assetgrades', function (Blueprint $table) {
            $table->id();


            $table->char('depth')->index();
            $table->char('threatcode')->index();


            $table->string('type');
            $table->string('domain');
            $table->string('clause');
            $table->integer('grade_asset');
            $table->string('explanation_risk')->nullable();
            $table->string('protection_plan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assetgrades');
    }
}
