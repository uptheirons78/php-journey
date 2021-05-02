<?php
  /**
   * Inside this file:
   * - arrays [general]
   * - associative array
   * - two ways to write arrays in PHP array() or []
   * - print_r()
   * - var_dump()
   * - strtoupper()
   */
  $arr = array(2, 7, "Volvo");
  print_r($arr);
  echo "<br>";
  $arr[3] = "John Doe"; //add a value to array
  print_r($arr);
  echo "<br>";
  $english = array(1 => 'one', 2 => 'two', 3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six');
  $roll = rand(1, 6);
  echo "<p>You rolled a " . strtoupper($english[$roll]) . "</p>";
  if ($roll == 6) {
    echo "<p class=\"green-text\">You win!</p>";
  } else {
    echo "<p class=\"red-text\">You lose, sorry!</p>";
  }

  $birthdays = array('Kevin' => '06-04-1978', 'Ugo' => '31-12-1987', 'Frank' => '23-05-2001');
  echo "<br>";
  var_dump($birthdays);

?>