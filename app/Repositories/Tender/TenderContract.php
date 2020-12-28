<?php

namespace App\Repositories\Tender;

interface TenderContract {
	public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($slug);
}
