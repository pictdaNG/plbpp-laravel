<?php

namespace App\Imports;

use App\Procurement;
use Maatwebsite\Excel\Concerns\ToModel;

class ProcurementImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Procurement([
            'serial'            => [0],
            'project_title'     => [1],
            'contractor'        => [2],
            'contract_sum'      => [3],
            'lga'               => [4],
            'approval_year'     => [5],
            'procuring_entity'  => [6],
        ]);
    }
}
