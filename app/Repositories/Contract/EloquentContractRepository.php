<?php

namespace App\Repositories\Contract;
use App\Repositories\Contract\ContractContract;
use App\Contract;

class EloquentContractRepository implements ContractContract
{

	public function create($request){
    $contract = new Contract;
    $contract->name = $request->name;
    $contract->phone_no = $request->phone_no;
    $contract->state = $request->state;
    $contract->address = $request->address;
    $contract->email = $request->email;
		$contract->save();
		return $contract;
  }

  public function findAll() {
		$contracts = Contract::orderBy('name', 'DESC')->get();
		return $contracts;
  }

  public function findById($id) {
    $contract = Contract::whereId($id)->first();
    return $contract;
  }

  public function update($request, $id) {
		$contract = $this->findById($id);
    $contract->name = $request->name;
    $contract->phone_no = $request->phone_no;
    $contract->address = $request->address;
    $contract->email = $request->email;
    $contract->state = $request->state;
		$contract->save();
		return $contract;
  }


  public function remove($id) {
		$contract = $this->findById($id);
		return $contract->delete();
  }
}
