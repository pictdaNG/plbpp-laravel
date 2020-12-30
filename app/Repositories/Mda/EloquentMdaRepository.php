<?php

namespace App\Repositories\Mda;
use App\Repositories\Mda\MdaContract;
use App\Mda;

class EloquentMdaRepository implements MdaContract
{

	public function create($request){
    $mda = new Mda;
    $mda->title = $request->title;
    $mda->mda_code = $request->mda_code;
		$mda->address = $request->address;
		$mda->save();
		return $mda;
  }

  public function findAll() {
		$mdas = Mda::orderBy('title', 'DESC')->get();
		return $mdas;
  }

  public function findById($id) {
	$mda = Mda::whereId($id)->first();
	return $mda;
  }



  public function update($request, $id) {
		$mda = $this->findById($id);
    $mda->title = $request->title;
    $mda->mda_code = $request->mda_code;
		$mda->address = $request->address;
		$mda->save();
		return $mda;
  }


  public function remove($id) {
		$mda = $this->findById($id);
		return $mda->delete();
  }
}
