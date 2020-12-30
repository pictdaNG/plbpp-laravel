<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAwardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status')->nullable();
            $table->string('award_amount')->nullable();
            $table->string('award_no')->nullable();
            $table->string('signed_date')->nullable();
            $table->bigInteger('contractor_id')->unsigned()->nullable();
            $table->foreign('contractor_id')->references('id')->on('contractors');
            $table->bigInteger('tender_id')->unsigned()->nullable();
            $table->foreign('tender_id')->references('id')->on('tenders');
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
        Schema::dropIfExists('suppliers');
    }
}
