<?php
  echo "<span class='cats' />";
  $event_date = get_field("event_date");
  $event_time = get_field("event_time");
  $event_location = get_field("event_location");
  $event_blurb = get_field("blurb");

  if ($event_date) {
    // dates are stored in yymmdd format
    $event_month = substr($event_date, 4, 2);
    $event_day = substr($event_date, 2, 2);

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
  echo '<div class="image-stripe event-stripe"></div>';
    echo '<div class="event-stripe-text">';
      echo '<div class="event-stripe-month">'.$month_string.'</div>';
      echo '<div class="event-stripe-day">'.$event_day.'</div>';
    echo '</div>';
    unset($event_date);
    unset($event_month);
    unset($event_day);
  };
?>

