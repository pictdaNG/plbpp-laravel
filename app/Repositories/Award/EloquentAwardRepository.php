<?php

namespace App\Repositories\Award;

use App\Repositories\Award\AwardContract;
use App\Award;

class EloquentAwardRepository implements AwardContract
{

	public function create($request){
    $award = new Award;
    $award->name = $request->name;
    $award->phone_no = $request->phone_no;
    $award->address = $request->address;
    $contract->email = $request->email;
		$award->save();
		return $award;
  }

  public function findAll() {
		return Award::orderBy('name', 'DESC')->get();
  }

  public function findById($id) {
	  return Award::whereId($id)->first();
  }

  public function update($request, $id) {
		$award = $this->findById($id);
    $award->name = $request->name;
    $award->phone_no = $request->phone_no;
    $award->address = $request->address;
    $award->email = $request->email;
		$award->save();
		return $award;
  }


  public function remove($id) {
		$award = $this->findById($id);
		return $award->delete();
  }
}
