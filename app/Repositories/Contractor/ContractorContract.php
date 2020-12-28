<?php

namespace App\Repositories\Contractor;

interface ContractorContract {
	public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($slug);
}
