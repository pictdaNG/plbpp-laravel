<?php

  function fromExcelToLinux($excel_time) {
    return ($excel_time-25569)*86400;
  }