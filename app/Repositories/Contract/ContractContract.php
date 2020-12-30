<?php

namespace App\Repositories\Contract;

interface ContractContract {
	public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($slug);
}
