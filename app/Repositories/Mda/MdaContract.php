<?php

namespace App\Repositories\Mda;

interface MdaContract {
	public function create($request);
  public function findAll();
  public function findById($id);
  //public function findBySlug($slug);
  public function update($request, $id);
  public function remove($slug);
}
