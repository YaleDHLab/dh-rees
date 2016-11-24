<?php
  include_once 'month-parser.php';
  $event_date = get_field("event_date");
  $event_time = get_field("event_time");
  $event_location = get_field("event_location");
  $event_blurb = get_field("blurb");

  if ($event_date) {
    // dates are stored in yymmdd format
    $event_month = substr($event_date, 4, 2);
    $event_day = substr($event_date, 6, 2);
    $month_string = getMonthString($event_month); 
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

