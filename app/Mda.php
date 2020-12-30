<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mda extends Model{

  protected $fillable = [
    'name',
    'mda_code',
    'address',
  ];

  public function tender() {
    return $this->hasMany('App\Tender');
  }
}
