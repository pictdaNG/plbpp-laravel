<?php
namespace App\Repositories\Tender;
use App\Repositories\Tender\ContractContract;
use File;
use App\Tender;
use App\Mda;
use App\Award;
use App\Contract;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;



class EloquentTenderRepository implements TenderContract{

	public function create($request){
    $tender = new Tender;
    $mda = Mda::find($request->mda_id);
    $tender->title = $request->title;
    $tender->tag = $request->tag;
    $tender->mda_id = $mda->id;
    $tender->release_id = rand(0,100).rand(100,200).rand(1,1000);;
    $tender->ocid = 'ocds-u6fq4x'.'-'.$mda->mda_code.'-'.rand(0,100).rand(0,200).rand(0,300);
    $tender->award_date = $request->award_date;
    $tender->description = $request->description;
    $tender->status = $request->tender_status;
    $tender->tender_value =  floatval(preg_replace('/[^\d\.\-]/', '', $request->tender_value));
    $tender->award_criteria = $request->award_criteria;
    $tender->procurement_method = $request->procurement_method;
    $tender->procurement_category = $request->procurement_category;
    $bidOpening = Carbon::createFromFormat('Y-m-d', $request->bid_submission_open_date);
    $tender->bid_submission_open_date = $bidOpening->toIso8601ZuluString();
    $bidOpening = Carbon::createFromFormat('Y-m-d', $request->bid_submission_close_date);
    $tender->bid_submission_close_date = $bidOpening->toIso8601ZuluString();
    $tender->save();
    $tag = $request->tag;
    $award = new Award;
    if($tag === 'award' || $tag === 'contract') {
      $award->tender_id = $tender->id;
      $award->status = $request->award_status;
      $award->award_no = rand(0,100).rand(100,200).rand(1,1000);;
      $award->award_amount =  floatval(preg_replace('/[^\d\.\-]/', '', $request->award_amount)) ;
      $award->contractor_id = $request->contractor_id;
      $award_award_date = Carbon::createFromFormat('Y-m-d', $request->award_date);
      $award->signed_date = $award_award_date->toIso8601ZuluString();
      $award->save();
    }
    if($tag === 'contract') {
      $contract = new Contract;
      $contract->tender_id = $tender->id;
      $contract->award_no = $award->award_no;
      $contract->status = $request->contract_status;
      $contract->contractor_id = $request->contractor_id;
      $contract->value = floatval(preg_replace('/[^\d\.\-]/', '', $request->award_amount)) ;
      $contract->contractor_id = $request->contractor_id;
      $contract_award_date = Carbon::createFromFormat('Y-m-d', $request->award_date);
      $contract->signed_date = $contract_award_date->toIso8601ZuluString();
      $contract_start_date = Carbon::createFromFormat('Y-m-d', $request->start_date);
      $contract->start_date =  $contract_start_date->toIso8601ZuluString();
      $contract_end_date = Carbon::createFromFormat('Y-m-d', $request->end_date);
      $contract->end_date =  $contract_end_date->toIso8601ZuluString();
      $contract->save();
    }
    return $tender;
  }

  public function findAll() {
    $tenders = Tender::with(['mda', 'award'])->get();
    return $tenders;
  }


  public function downloadJSONFile(){
    $tenders = Tender::with(['mda', 'award', 'contract'])->get();
      $std = new \stdClass;
      $std->name = "Plateau State Bureau of Public Procurement";
      $nTenders = [];

      foreach($tenders as $tender) {
        $newTenders = [];
        $partiesArray = [];
        $suppliersArray = [];
        $contractsArray = [];
        $awardsArray = [];
        $tenderObj = new \stdClass();
        $contractObj = new \stdClass();
        $tenderValueObj = new \stdClass();
        $tenderPeriodObj = new \stdClass();
        $contractPeriodObj = new \stdClass();
        $contractValueObj = new \stdClass();
        $awardValueObj = new \stdClass();
        $awardObj = new \stdClass();
        $awardPeriodObj = new \stdClass();
        $awardIdentifierObj = new \stdClass();
        $addressObject = new \stdClass();
        $contactObject = new \stdClass();
        $buyerObj = new \stdClass();

        if(sizeof($tender->award) > 0 &&  sizeof($tender->contract) > 0) {
          $newTenders['tag'] = ["tender", "award", "contract"];
        }  else if(sizeof($tender->award) > 0) {
          $newTenders['tag'] = ["tender", "award"];
        } else if(sizeof($tender->contract) > 0) {
          $newTenders['tag'] = ["tender", "contract"];
        } else {
          $newTenders['tag'] = ["tender"];
        }

        $newTenders["language"] = 'en';

        $newTenders['ocid'] = $tender->ocid;
        $newTenders['id'] = $tender->release_id;
        $newTenders['date'] = $tender->updated_at;

        $buyerObj->id = 'ocds-u6fq4x-'.$tender->mda->mda_code;
        $buyerObj->name = $tender->mda->title;
        $newTenders['buyer'] = $buyerObj;

        $addressObject->countryName = 'Nigeria';
        $addressObject->region = 'Plateau State';
        $addressObject->streetAddress = $tender->mda->address;

        $contactObject->telephone = $tender->mda->phone_no;
        $contactObject->email = $tender->mda->email;

        //$buyerObj->address = $addressObject;
        //$buyerObj->contactPoint = $contactObject;

        $buyerObj->roles = ["buyer"];

        $newTenders['initiationType'] = "tender";

        array_push($partiesArray, $buyerObj);
        $newTenders['parties'] = $partiesArray;

        $tenderValueObj->amount = (float)$tender->tender_value;
        $tenderValueObj->currency = 'NGN';

        $tenderPeriodObj->startDate = $tender->bid_submission_open_date;
        $tenderPeriodObj->endDate =  $tender->bid_submission_close_date;

        $tenderObj->id = (string)$tender->id;
        $tenderObj->title = $tender->title;
        $tenderObj->status = $tender->status;

        $tenderObj->description = $tender->description;
        $tenderObj->procurementMethod = $tender->procurement_method;
        $tenderObj->procurementCategory = $tender->procurement_category;

        $tenderObj->value = $tenderValueObj;
        $tenderObj->tenderPeriod = $tenderPeriodObj;
        $tenderObj->awardPeriod = $tenderPeriodObj;
        $tenderObj->awardCriteria = $tender->award_criteria;
        $newTenders['tender'] = $tenderObj;

        foreach($tender->award as $award) {
          $awardValueObj->amount = (float)$award->award_amount;
          $awardValueObj->currency = 'NGN';
          $awardObj->id = (string)$award->award_no;
          $awardObj->title = $tender->title;
          $awardObj->date = $tender->updated_at;
          $awardObj->description = $tender->description;
          $awardObj->value = $awardValueObj;
          $awardObj->status = $award->status;
          $awardObj->suppliers = $awardValueObj;

          $awardIdentifierObj->id = (string)$award->contractor->contractor_no;
          $awardIdentifierObj->name = $award->contractor->name;

          $addressObject->countryName = 'Nigeria';
          $addressObject->region = $award->contractor->state.' State';
          $addressObject->streetAddress = $award->contractor->address;

          $contactObject->telephone = $award->contractor->phone_no;
          $contactObject->email = $award->contractor->email;

          $awardIdentifierObj->address = $addressObject;
          $awardIdentifierObj->contactPoint = $contactObject;
          $awardIdentifierObj->roles = ["supplier"];


          array_push($partiesArray, $awardIdentifierObj);
          array_push($suppliersArray, $awardIdentifierObj);
          array_push($awardsArray, $awardObj);
          $newTenders['parties'] = $partiesArray;
          $awardObj->suppliers = $suppliersArray;
        }
        $newTenders['awards'] = $awardsArray;


        foreach($tender->contract as $contract) {
          $contractValueObj->amount = (float)$contract->value;
          $contractValueObj->currency = 'NGN';

          $contractPeriodObj->startDate = $contract->start_date;
          $contractPeriodObj->endDate = $contract->end_date;

          $contractObj->id = $contract->award_no;
          $contractObj->awardID = $contract->award_no;
          $contractObj->title = $tender->title;
          $contractObj->status = $contract->status;
          $contractObj->description = $tender->description;
          $contractObj->dateSigned = $contract->signed_date;
          $contractObj->value = $contractValueObj;
          $contractObj->period = $contractPeriodObj;
          array_push($contractsArray, $contractObj);
        }
        $newTenders['contracts'] = $contractsArray;
        dd($newTenders);

        $nTenders[] = $newTenders;
        unset($buyerObj);
        unset($tenderObj);
        unset($awardObj);
        unset($contractObj);
        unset($contactObject);
        unset($addressObject);
        unset($awardValueObj);
        unset($tenderValueObj);
        unset($tenderPeriodObj);
        unset($contractPeriodObj);
        unset($contractValueObj);
      }

      $data = json_encode(
        [
          "version" => "1.1",
          "publisher" => $std,
          "uri" => "https://plateaustatebpp.com/ocds",
          "publishedDate" => sizeof($tenders) ? $tenders[0]->updated_at : Carbon::now(),
          'releases' => $nTenders,
        ]
      );

    // $destinationPath= base_path("resources/downloads/json/ocds.json");
    // File::put($destinationPath, $data);
    Storage::disk('local')->put('ocds.json', $data);
    return Storage::download('ocds.json');
    //$url = Storage::url('file.jpg');;

    //return response()->download($destinationPath);
  }

  public function findById($id) {
    $tender = Tender::whereId($id)->with(['mda', 'award', 'contract'])->first();
    return $tender;
  }

  public function update($request, $id) {
		// $tender = $this->findById($id);
    // $tender->name = $request->name;
    // $tender->phone_no = $request->phone_no;
    // $tender->address = $request->address;
    // $tender->email = $request->email;
    $tender = $this->findById($id);
    $tender->title = $request->title;
    $tender->tag = $request->tag;
    $tender->mda_id = $request->mda_id;
    $tender->award_date = $request->award_date;
    $tender->award_value = $request->award_value;
    $tender->description = $request->description;
    $tender->tender_value = $request->tender_value;
    $tender->award_criteria = $request->award_criteria;
    $tender->procurement_method = $request->procurement_method;
    $tender->procurement_category = $request->procurement_category;
    $tender->bid_submission_open_date = $request->bid_submission_open_date;
    $tender->bid_submission_close_date = $request->bid_submission_close_date;
		$tender->save();
		return $tender;
  }


  public function remove($id) {
		$tender = $this->findById($id);
		return $tender->delete();
  }
}

