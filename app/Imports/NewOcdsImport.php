<?php

namespace App\Imports;

use App\NewOcds;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class NewOcdsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        return new NewOcds([
            'mda_name' => $row['ministry_department_agency_mdas'], // 1
            'project_title' => $row['project_title'],
            'project_identification' => $row['project_identification'],
            'project_description' => $row['project_description'],
            'lga' => $row['lga'],
            'state' => $row['state'],
            'project_approval_year' => $row['project_approval_year'],
            'budget_source' => $row['budget_source'],
            'budgeted_amount' => $row['budgeted_amount_n'],
            'tender_status' => $row['tender_status'],
            'procurement_method' => $row['procurement_method'], //3
            'procurement_category' => $row['procurement_category'], //4
            'award_criteria' => $row['award_criteria'],
            'tender_start_date' => $row['tender_start_date'],
            'tender_end_date' => $row['tender_end_date'],
            'number_of_tenderers' => $row['number_of_tenderers'],
            'tenderers_list_of_companies' => $row['tenderers_list_of_companies'],
            'tender_amount' => $row['tender_amount_n'],
            'award_id' => $row['award_id'],
            'award_status' => $row['award_status_for_projects_that_the_tender_did_not_or_have_not_led_to_any_award'],
            'award_date' => $row['award_date'], //2
            'award_amount' => $row['award_amount'],
            'name_of_contractors_suppliers' => $row['name_of_contractors_suppliers'],
            'contract_id' => $row['contract_id'],
            'contract_start_date' => $row['contract_start_date'],
            'contract_end_date' => $row['contract_end_date'],
            'contract_status' => $row['contract_status'],
            'contract_amount' => $row['contract_amount'],
            'amount_paid_so_far' => $row['amount_paid_so_far'],
            'payer' => $row['payer'],
            'payee' => $row['payee'],
            'dates_of_payment_date_1_date_2' => $row['dates_of_payment_date_1_date_2'],
            'amount_breakdown_amount_1_amount_2' => $row['amount_breakdown_amount_1_amount_2'],
            'procurement_stage' => $row['procurement_stage'],

        ]);
    }
}
