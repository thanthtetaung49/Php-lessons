<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

   <h1>Date Time</h1>

   <?php

   date_default_timezone_set('Asia/Yangon');

   $today = date('d-m-Y h:i A');
   echo "Current Date => ". $today . "<br>";

   $addDate = date_create(date('d-m-Y'));
   date_add($addDate, date_interval_create_from_date_string('5 days'));
   echo "Add Date => ". date_format($addDate, 'd-m-Y')."<br>";

   $subDate = date_create(date('d-m-Y'));
   date_sub($subDate, date_interval_create_from_date_string("5 days"));
   echo "Sub Date => " . date_format($subDate, 'd-m-Y')."<br>";

   $getNumDays = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
   echo "Numbers of days in month => ". $getNumDays;

   ?>

</body>

</html>