<?php

  // d -> cal_days_in_month
  // m -> cal_days_in_month
  // y -> cal_days_in_Year
  // l -> day of the week
  // h -> hour
  // i -> min
  // s -> sec
  // a -> AM/PM

  // Set Time TimeZone
  date_default_timezone_set('Europe/Zurich');

  echo date('l: d/m/y') . '<br>';

  /*
    Unix Timestamp is a long integer containing the number
    of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT)
    and the time specified.
   */
  $timestamp = mktime(10, 14, 54, 9, 10, 1981);
  echo date('d/m/Y h:i:sa', $timestamp) . '<br>';

  $timestamp2 = strtotime('7:00pm March 22 2016');
  echo $timestamp2 . '<br>';

  echo date('d/m/Y h:i:sa', $timestamp2) . '<br>';
  echo date('d/m/Y h:i:sa', strtotime('tomorrow')) . '<br>';
  echo date('d/m/Y h:i:sa', strtotime('+2 Days')) . '<br>';
  echo date('d/m/Y h:i:sa', strtotime('+2 Years')) . '<br>';

  # php.net/manual/en/function.date.php

 ?>
