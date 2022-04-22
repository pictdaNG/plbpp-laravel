<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewOcdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_ocds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('mda_name')->nullable();
            $table->string('project_title')->nullable();
            $table->longText('project_identification')->nullable();
            $table->longText('project_description')->nullable();
            $table->string('lga')->nullable();
            $table->string('state')->nullable();
            $table->string('project_approval_year')->nullable();
            $table->string('budget_source')->nullable();
            $table->string('budgeted_amount')->nullable();
            $table->string('tender_status')->nullable();
            $table->string('procurement_method')->nullable();
            $table->string('procurement_category')->nullable();
            $table->string('award_criteria')->nullable();
            $table->string('tender_start_date')->nullable();
            $table->string('tender_end_date')->nullable();
            $table->string('number_of_tenderers')->nullable();
            $table->longText('tenderers_list_of_companies')->nullable();
            $table->string('tender_amount')->nullable();
            $table->string('award_id')->nullable();
            $table->string('award_status')->nullable();
            $table->string('award_date')->nullable();
            $table->string('award_amount')->nullable();
            $table->string('name_of_contractors_suppliers')->nullable();
            $table->string('contract_id')->nullable();
            $table->string('contract_start_date')->nullable();
            $table->string('contract_end_date')->nullable();
            $table->string('contract_status')->nullable();
            $table->string('contract_amount')->nullable();
            $table->string('amount_paid_so_far')->nullable();
            $table->string('payer')->nullable();
            $table->string('payee')->nullable();
            $table->string('dates_of_payment_date_1_date_2')->nullable();
            $table->string('amount_breakdown_amount_1_amount_2')->nullable();
            $table->string('procurement_stage')->nullable();

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
        Schema::dropIfExists('new_ocds');
    }
}
