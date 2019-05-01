<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcurementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('serial')->nullable();
            $table->string('project_title');
            $table->string('contractor');
            $table->string('contract_sum');            
            $table->string('date_of_award');
            $table->string('procuring_entity')->nullable();
            $table->string('lga')->nullable();
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
        Schema::dropIfExists('procurements');
    }
}
