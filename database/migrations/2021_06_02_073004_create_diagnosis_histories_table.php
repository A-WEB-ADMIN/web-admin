<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosisHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosis_histories', function (Blueprint $table) {
            $table->id();

            $table->char('depth')->index();


            $table->unsignedBigInteger('ismsp4_id');
            $table->unsignedBigInteger('company_id');
            $table->string('type');

            $table->string('version');
            $table->text('explanation');
            $table->string('grade_diagnosis');
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
        Schema::dropIfExists('diagnosis_histories');
    }
}
