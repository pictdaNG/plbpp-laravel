<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
  public function tender() {
    return $this->belongsTo('App\Tender');
  }

}
