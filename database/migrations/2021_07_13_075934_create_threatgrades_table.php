<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreatgradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threatgrades', function (Blueprint $table) {
            $table->char('code');
            $table->primary('code');


            $table->string('domain');
            $table->string('subdomain');
            $table->string('explanation_threat');


            $table->integer('confidentiality');
            $table->integer('integrity');
            $table->integer('availability');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('threatgrades');
    }
}
