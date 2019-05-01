<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procurement extends Model
{

  public $fillable = [
    'serial',
    'project_title',
    'contractor',
    'contract_sum',
    'lga',
    'approval_year',
    'procuring_entity',
    'description',
  ];

  
}
