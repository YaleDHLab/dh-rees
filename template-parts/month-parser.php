<?php function getMonthString($event_month) {

    // convert the month integer to a string
    switch ($event_month) {
      case "01":
          $month_string = "JAN";
          break;

      case "02":
          $month_string = "FEB";
          break;

      case "03":
          $month_string = "MAR";
          break;

      case "04":
          $month_string = "APR";
          break;

      case "05":
          $month_string = "MAY";
          break;

      case "06":
          $month_string = "JUN";
          break;

      case "07":
          $month_string = "JUL";
          break;

      case "08":
          $month_string = "AUG";
          break;

      case "09":
          $month_string = "SEP";
          break;

      case "10":
          $month_string = "OCT";
          break;

      case "11":
          $month_string = "NOV";
          break;

      case "12":
          $month_string = "DEC";
          break;
  }
  return $month_string;
} ?>
