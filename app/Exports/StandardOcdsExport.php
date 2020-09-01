<?php

namespace App\Exports;

use App\Ocds;
use Maatwebsite\Excel\Concerns\FromCollection;

class StandardOcdsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Ocds::all();
    }
}
