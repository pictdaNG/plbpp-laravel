<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('award_no')->nullable();
            $table->bigInteger('tender_id')->unsigned()->nullable();
            $table->foreign('tender_id')->references('id')->on('tenders')->onDelete('cascade');
            $table->bigInteger('contractor_id')->unsigned()->nullable();
            $table->foreign('contractor_id')->references('id')->on('contractors')->onDelete('cascade');
            $table->string('status')->nullable();
            $table->string('signed_date')->nullable();
            $table->string('value')->nullable();
            $table->string('currency')->default('NGN');
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
