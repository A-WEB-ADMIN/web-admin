<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetCumstomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_cumstoms', function (Blueprint $table) {
            $table->id();
            $table->string('tab');
            $table->string('code')->nullable();

            $table->string('cus_col_1')->nullable();
            $table->string('cus_col_2')->nullable();
            $table->string('cus_col_3')->nullable();
            $table->string('cus_col_4')->nullable();
            $table->string('cus_col_5')->nullable();

            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedBigInteger('tab_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asset_cumstoms');
    }
}
