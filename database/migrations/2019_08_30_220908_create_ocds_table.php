<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOcdsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ocds', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->text('project');
			$table->integer('cost')->default(0);
			$table->integer('budget_amount')->default(0);
			$table->string('rationale')->nullable();
			$table->text('location')->nullable();
			$table->string('procurement_category')->nullable();
			$table->string('procurement_method_used')->nullable();
			$table->string('date_of_advert')->nullable();
			$table->string('date_of_advert_close')->nullable();
			$table->string('award_criteria')->nullable();
			$table->string('final_date_of_completion')->nullable();
			$table->string('contract_boq')->nullable();
			$table->string('date_of_award')->nullable();
			$table->string('date_of_signing_of_contract')->nullable();
			$table->string('commencement_date')->nullable();
			$table->string('contract_duration')->nullable();
			$table->string('name_of_contractor')->nullable();
			$table->string('address_of_contractor')->nullable();
			$table->string('contractor_phone')->nullable();
			$table->string('contractor_email')->nullable();
			$table->string('project_photographs')->nullable();
			$table->integer('project_funding')->default(0);
			$table->string('project_status')->nullable();
			
			$table->string('slug');
			$table->string('project_month')->nullable();
			

			$table->string('st_project')->nullable();
			$table->string('st_name_of_contractor')->nullable();
			$table->double('st_contract_sum')->nullable();
			$table->string('st_payment_date')->nullable();
			$table->string('st_project_status')->nullable();
			$table->string('st_percentage')->nullable();
			$table->string('st_date_of_award')->nullable();
			$table->text('st_remarks')->nullable();
			$table->string('st_entry_date')->useCurrent();
			
			$table->bigInteger('project_year')->nullable();

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('ocds');
	}
}
