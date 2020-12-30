<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contractor extends Model{
  protected $fillable = [
    'name',
    'address',
    'email',
    'phone_no',
  ];

  public function tender() {
    return $this->hasMany('App\Tender');

  }

  public function award() {
    return $this->hasMany('App\Award');
  }
}
