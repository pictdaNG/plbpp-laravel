<?php

namespace App\Repositories\Ocds;
use App\Repositories\Ocds\OcdsContract;
use App\Ocds;
use Carbon\Carbon;

class EloquentOcdsRepository implements OcdsContract
{

	public function create($request){
		$ocds = new Ocds;
		$ocds->project = $request->project;
		$ocds->st_name_of_contractor = $request->name_of_contractor;
		$ocds->st_contract_sum = trim(str_replace( ',', '', $request->contract_sum));
		$ocds->st_payment_date = $request->payment_date;
		$ocds->st_project_status = $request->project_status;
		$ocds->st_percentage = $request->percentage;
		$ocds->st_date_of_award = $request->date_of_award ?: Carbon::now()->format('d-m-Y');
		$ocds->st_remarks = $request->remarks;		
		$ocds->st_entry_date = $request->st_entry_date ?: Carbon::now()->format('d-m-Y');		

		$str = strtolower($request->project);
		$ocds->slug = preg_replace('/\s+/', '-', $str);
		
		$ocds->save();
		return $ocds;
  }

  public function createNew($request){
		$ocds = new Ocds;
		$ocds->project = $request->project;  
		$ocds->cost = $request->cost;   
		$ocds->budget_amount = $request->budget_amount;   
		$ocds->rationale = $request->rationale;
		$ocds->location = $request->location;
		$ocds->procurement_category = $request->procurement_category;
		$ocds->procurement_method_used = $request->procurement_method_used;
		$ocds->date_of_advert = $request->date_of_advert;
		$ocds->date_of_advert_close = $request->date_of_advert_close;
		$ocds->award_criteria = $request->award_criteria;
		$ocds->final_date_of_completion = $request->final_date_of_completion;
		$ocds->contract_boq = $request->contract_boq;
		$ocds->date_of_award = $request->date_of_award;
		$ocds->date_of_signing_of_contract = $request->date_of_signing_of_contract;
		$ocds->commencement_date = $request->commencement_date;
		$ocds->contract_duration = $request->contract_duration;
		$ocds->name_of_contractor = $request->name_of_contractor;
		$ocds->address_of_contractor = $request->address_of_contractor;
		$ocds->contractor_phone = $request->contractor_phone;
		$ocds->contractor_email = $request->contractor_email;
		$ocds->project_photographs = $request->project_photographs;
		$ocds->project_funding = $request->project_funding;
		$ocds->project_status = $request->project_status;
		$ocds->project_month = $request->project_month;
		$ocds->project_year = $request->project_year;

		$str = strtolower($request->project);
		$ocds->slug = preg_replace('/\s+/', '-', $str);
		// dd($ocds);
		$ocds->save();
		return $ocds;
  }

  public function findAll() {
		$ocds = Ocds::orderBy('st_date_of_award', 'DESC')->get();
		return $ocds;
  }
	
  public function findById($id) {
	$gallery_image = Ocds::whereId($id)->first();
	return $gallery_image;
  }

  public function findBySlug($slug){
	$gallery = Ocds::where('slug', $slug)->first();
	return $gallery;
  }    
	  
  public function update($request, $id) {
		$ocds= $this->findById($id);
		$ocds->project = $request->project;
		$ocds->st_name_of_contractor = $request->name_of_contractor;
		$ocds->st_contract_sum = $request->contract_sum;
		$ocds->st_payment_date = $request->payment_date;
		$ocds->st_project_status = $request->project_status;
		$ocds->st_percentage = $request->percentage;
		$ocds->st_date_of_award = $request->date_of_award;
		$ocds->st_remarks = $request->remarks;
		$ocds->st_entry_date = $request->st_entry_date;
		
		$ocds->save();
		return $ocds;
  }

  public function updateRecord($request, $slug) {
		$ocds= $this->findBySlug($slug);
		$ocds->project = $request->project;  
		$ocds->cost = $request->cost;   
		$ocds->budget_amount = $request->budget_amount;   
		$ocds->rationale = $request->rationale;
		$ocds->location = $request->location;
		$ocds->procurement_category = $request->procurement_category;
		$ocds->procurement_method_used = $request->procurement_method_used;
		$ocds->date_of_advert = $request->date_of_advert;
		$ocds->date_of_advert_close = $request->date_of_advert_close;
		$ocds->award_criteria = $request->award_criteria;
		$ocds->final_date_of_completion = $request->final_date_of_completion;
		$ocds->contract_boq = $request->contract_boq;
		$ocds->date_of_award = $request->date_of_award;
		$ocds->date_of_signing_of_contract = $request->date_of_signing_of_contract;
		$ocds->commencement_date = $request->commencement_date;
		$ocds->contract_duration = $request->contract_duration;
		$ocds->name_of_contractor = $request->name_of_contractor;
		$ocds->address_of_contractor = $request->address_of_contractor;
		$ocds->contractor_phone = $request->contractor_phone;
		$ocds->contractor_email = $request->contractor_email;
		// $ocds->project_photographs = $request->project_photographs;
		$ocds->project_funding = $request->project_funding;
		$ocds->project_status = $request->project_status;
		$ocds->project_month = $request->project_month;
		$ocds->project_year = $request->project_year;

		$str = strtolower($request->project);
		$ocds->slug = preg_replace('/\s+/', '-', $str);
		// dd($ocds);
		$ocds->save();
		return $ocds;
  }
	
  public function remove($id) {
		$ocds = $this->findById($id);
		return $ocds->delete();
  }
}
