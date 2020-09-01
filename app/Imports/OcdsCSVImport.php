<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Ocds;
use Illuminate\Support\Str;
use Carbon\Carbon;

class OcdsCSVImport implements ToModel
{
    /**
    * @param Collection $collection
    */
    public function model(array $row)
    {
        // dd($row);
        $slug = Str::uuid();

        // dd($row[32]);
        return new Ocds([
            'project'            => $row[1],
            'cost'            => $row[2],
            'budget_amount'            => $row[3],
            'rationale'            => $row[4],
            'location'            => $row[5],
            'procurement_category'            => $row[6],
            'procurement_method_used'            => $row[7],
            'date_of_advert'            => $row[8],
            'date_of_advert_close'            => $row[9],
            'award_criteria'            => $row[10],
            'final_date_of_completion'            => $row[11],
            'contract_boq'            => $row[12],
            'date_of_award'            => $row[13],
            'date_of_signing_of_contract'            => $row[14],
            'commencement_date'            => $row[15],
            'contract_duration'            => $row[16],
            'name_of_contractor'            => $row[17],
            'address_of_contractor'            => $row[18],
            'contractor_phone'            => $row[19],
            'contractor_email'            => $row[20],
            'project_photographs'            => $row[21],
            'project_funding'            => $row[22],
            'project_status'            => $row[23],
            'slug'            => $row[24],
            'project_month'            => $row[25],


            'st_project'            => $row[1],
            'st_name_of_contractor'     => $row[27],
            'st_contract_sum'        => $row[28],
            'st_payment_date'      => $row[29],
            'st_project_status'    => $row[30],
            'st_percentage'     => $row[31],
            'st_date_of_award'  =>  date("Y-m-d", fromExcelToLinux((int)$row[32])),
            // 'st_date_of_award'  =>  Carbon::createFromFormat('Y-m-d', $row[32])->toDateTimeString(),
            'st_entry_date'  => $row[33] ?: Carbon::now(),
            'st_remarks'  => $row[34],
            // 'project_year'  => $row[35],
        ]);
    }
}
