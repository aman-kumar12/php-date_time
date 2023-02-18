<?php
// indian time zone key..
$timezone_key = date_default_timezone_set('Asia/Calcutta');
// echo date_default_timezone_get().'<br>';
$date = date_create();
echo date_format($date, 'd-m-y h:i:s A');
// h = hour, i = minute, s = second
// $time = time();
// echo $time;
?>