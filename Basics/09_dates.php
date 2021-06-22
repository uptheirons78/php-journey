<?php
function lines() {
  echo "<br> ------ <br>";
}
// Print current date
echo date('Y-m-d H:i:s');
lines();
// Print yesterday
echo date('Y-m-d H:i:s', time() - 60 * 60 * 24);
lines();
// Different format: https://www.php.net/manual/en/function.date.php
echo date('j F Y, H:i:s');
lines();
// Print current timestamp
echo time();
lines();
// Parse date: https://www.php.net/manual/en/function.date-parse.php
$parseDate = date_parse('2020-10-12 09:00:00');
var_dump($parseDate);
lines();

