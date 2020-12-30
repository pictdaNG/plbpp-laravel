<?php

namespace App\Repositories\Award;

interface AwardContract {
	public function create($request);
  public function findAll();
  public function findById($id);
  public function update($request, $id);
  public function remove($slug);
}
