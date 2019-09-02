<?php

namespace App\Exports;

use App\Procurement;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProcurementExport implements FromCollection {
  /**
  * @return \Illuminate\Support\Collection
  */
  public function collection() {
    return Procurement::all();
  }
}
