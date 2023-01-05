<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_documents', function (Blueprint $table) {
            $table->id();
            $table->char('tab');
            $table->char('type');
            $table->string('code');
            $table->string('name');
            $table->string('manager');
            $table->string('admin');
            $table->string('department');

            $table->smallInteger('confidentiality');
            $table->smallInteger('integrity');
            $table->smallInteger('availability');

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
        Schema::dropIfExists('asset_documents');
    }
}
