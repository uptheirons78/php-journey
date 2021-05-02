<?php
  /**
   * Inside this file:
   * - loops [generally]
   * - for loop
   * - while loop
   * - do while
   * - less than or equal operator <=
   * - more than or equal operator >=
   * - increment operator ++
   * - != different than operator
   */
// FOR LOOP EXAMPLE
/**
  for ($count = 1; $count <= 3; $count ++) {
    $roll = rand(1, 6);
    echo '<p>You rolled a ' . $roll . '</p>';
    if ($roll == 6) {
      echo '<p class="green-text">You win</p>';
    } else {
      echo '<p class="red-text">Sorry, you lose</p>';
    }
  }
 */
// WHILE LOOP EXAMPLE
  /**
    $count = 1;
    while ($count <= 10) {
      echo '<p>' . $count . '</p>';
      ++$count;
    }
 */
  /*
  $roll = 0;
  while($roll != 6) {
    $roll = rand(1, 6);
    echo "<p>You rolled a {$roll}</p>";
    if ($roll == 6) {
      echo "<p class=\"green-text\">You win!</p>";
    } else {
      echo "<p class=\"red-text\">Sorry, You lose. Try again!</p>";
    }
  }
  */
  do {
    $roll = rand(1, 6);
    echo "<p>You rolled a {$roll}</p>";
    if ($roll == 6) {
      echo "<p class=\"green-text\">You win!</p>";
    } else {
      echo "<p class=\"red-text\">Sorry, You lose. Try again!</p>";
    }
  } while ($roll != 6);

?>