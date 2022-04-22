<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewOcds extends Model
{
    protected $fillable = [
        'mda_name',
        'project_title', // yes
        'project_identification',
        'project_description',
        'lga',
        'state',
        'project_approval_year',
        'budget_source',
        'budgeted_amount', // yes
        'tender_status',
        'procurement_method', // Yes
        'procurement_category', //Yes
        'award_criteria', //yes
        'tender_start_date',
        'tender_end_date',
        'number_of_tenderers',
        'tenderers_list_of_companies',
        'tender_amount',
        'award_id',
        'award_status',
        'award_date',
        'award_amount',
        'name_of_contractors_suppliers', // yes
        'contract_id',
        'contract_start_date',
        'contract_end_date',
        'contract_status',
        'contract_amount',
        'amount_paid_so_far',
        'dates_of_payment_date_1_date_2',
        'payee',
        'payer',
        'amount_breakdown_amount_1_amount_2',
        'procurement_stage',
    ];

}
