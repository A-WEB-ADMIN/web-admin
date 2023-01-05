<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_servers', function (Blueprint $table) {
            $table->id();
            $table->char('tab')->nullable();
            $table->char('status')->nullable();
            $table->char('type')->nullable();
            $table->string('code')->nullable();
            $table->string('alias_name')->nullable();
            $table->string('version')->nullable();
            $table->string('ip')->nullable();
            $table->string('purpose')->nullable();
            $table->string('location')->nullable();
            $table->string('manager')->nullable();
            $table->string('admin')->nullable();
            $table->string('department')->nullable();

            $table->smallInteger('confidentiality')->nullable();
            $table->smallInteger('integrity')->nullable();
            $table->smallInteger('availability')->nullable();

            $table->char('tech')->nullable();
            $table->char('is_diagnosis')->nullable();

            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('group_id')->nullable();
            $table->unsignedBigInteger('tab_id')->nullable();


            $table->string('extend_1')->nullable();
            $table->string('extend_2')->nullable();
            $table->string('extend_3')->nullable();
            $table->string('extend_4')->nullable();
            $table->string('extend_5')->nullable();

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
        Schema::dropIfExists('asset_servers');
    }
}
