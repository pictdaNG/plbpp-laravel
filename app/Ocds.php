<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocds extends Model
{
  protected $fillable = [
    'project', // yes
    'cost',
    'budget_amount', // yes
    'rationale',
    'location',
    'procurement_category', // Yes
    'procurement_method_used', // Yes
    'date_of_advert',
    'date_of_advert_close',
    'award_criteria', // yes
    'final_date_of_completion',
    'contract_boq',
    'date_of_award',
    'date_of_signing_of_contract',
    'commencement_date',
    'contract_duration',
    'name_of_contractor',
    'address_of_contractor',
    'contractor_phone',
    'contractor_email',
    'project_photographs',
    'project_funding',
    'project_status',
    'project_month',
    'project_year',
    'slug',
    
    
    'st_project',
    'st_name_of_contractor', // yes
    'st_contract_sum',
    'st_payment_date',
    'st_project_status',
    'st_percentage',
    'st_date_of_award',
    'st_remarks',
    'st_entry_date',
  ];
}
