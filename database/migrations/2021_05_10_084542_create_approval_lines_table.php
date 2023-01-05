<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovalLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approval_lines', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evidence_id')->nullable();
            $table->unsignedBigInteger('document_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->integer('order')->nullable();
            $table->unsignedBigInteger('receiver_id')->nullable();
            $table->string('receiver_name')->nullable();
            $table->string("message")->nullable();
            $table->string('status')->nullable();
            $table->timestamp('sign_at')->nullable();

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
        Schema::dropIfExists('approval_lines');
    }
}
