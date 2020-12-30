<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
  public function tender() {
    return $this->belongsTo('App\Tender');
  }

  public function contractor() {
    return $this->belongsTo('App\Contractor');
  }
}
