<?php

$arr = array('one', 'two', 'three');
$person = array(
  'name' => 'Pippo',
  'surname' => 'Pappo',
  'position' => 'IT Consultant',
);

// while
$i = 0;
while($i < count($arr)) {
  echo $arr[$i] . '<br>';
  $i++;
}
// do - while
echo '<br>' . '-----' . '<br>';
$counter = 0;
do {
  echo $counter . '<br>';
  $counter++;
} while ($counter <= 10);
// for
echo '<br>' . '-----' . '<br>';
for ($i = 0; $i < count($arr); $i++) {
  echo $arr[$i] . '<br>';
}
// foreach
echo '<br>' . '-----' . '<br>';
foreach($arr as $element) {
  echo $element . '<br>';
}
// Iterate Over associative array.
echo '<br>' . '-----' . '<br>';
foreach($arr as $key => $value) {
  echo "$key: $value" . "<br>";
}