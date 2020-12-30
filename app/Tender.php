<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tender extends Model
{
  public function mda() {
    return $this->belongsTo('App\Mda');
  }

  public function award() {
    return $this->hasMany('App\Award');
  }


  public function contract() {
    return $this->hasMany('App\Contract');
  }

  public function contractor() {
    return $this->belongsTo('App\Contractor');
  }
}
