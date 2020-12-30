<?php
  function fromExcelToLinux($excel_time) {
    return ($excel_time-25569)*86400;
  }

  function transformDate($value, $format = 'Y-m-d'){
    try {
        return \Carbon\Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value));
    } catch (\ErrorException $e) {
        return \Carbon\Carbon::createFromFormat($format, $value);
    }
  }