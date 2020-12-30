<?php

namespace App\Repositories\Contractor;
use App\Repositories\Contractor\ContractorContract;
use App\Contractor;

class EloquentContractorRepository implements ContractorContract
{

	public function create($request){
    $contractor = new Contractor;
    $contractor->name = $request->name;
    $contractor->phone_no = $request->phone_no;
    $contractor->address = $request->address;
    $contractor->email = $request->email;
    $contractor->state = $request->state;
    $contractor->contractor_no = 'PL-'.rand(0,1000).'-'.rand(100, 2000);

		$contractor->save();
		return $contractor;
  }

  public function findAll() {
		$contractors = Contractor::orderBy('name', 'DESC')->get();
		return $contractors;
  }

  public function findById($id) {
	$contractor = Contractor::whereId($id)->first();
	return $contractor;
  }

  public function update($request, $id) {
		$contractor = $this->findById($id);
    $contractor->name = $request->name;
    $contractor->phone_no = $request->phone_no;
    $contractor->address = $request->address;
    $contractor->email = $request->email;
		$contractor->save();
		return $contractor;
  }


  public function remove($id) {
		$contractor = $this->findById($id);
		return $contractor->delete();
  }
}
