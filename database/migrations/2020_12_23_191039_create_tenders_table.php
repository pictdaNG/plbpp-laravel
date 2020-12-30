<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTendersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('status')->nullable();
            $table->string('year')->nullable();
            $table->string('project_status')->nullable();
            $table->string('tender_no')->nullable();
            $table->string('tag')->nullable();
            $table->string('tender_value')->nullable();
            $table->string('tender_currency')->default('NGN');
            $table->bigInteger('mda_id')->unsigned()->nullable();
            $table->foreign('mda_id')->references('id')->on('mdas');
            $table->string('award_date')->nullable();
            $table->string('release_id')->nullable();
            $table->string('ocid')->nullable();
            $table->string('award_criteria')->nullable();
            $table->string('award_currency')->default('NGN');
            $table->string('procurement_method')->nullable();
            $table->string('procurement_category')->nullable();
            $table->string('bid_submission_open_date')->nullable();
            $table->string('bid_submission_close_date')->nullable();
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
        Schema::dropIfExists('tenders');
    }
}
