<h3>Let's play dice</h3>
<?php
  /**
   * Inside this file:
   * variables
   * built in function rand()
   * if statement and conditionals
   * echo
   * html inside php
   * string interpolation with double quotes
   * escaping quotes (double)
   * greater than > and less than < operator
   * || [or] or operator && [and] and operator
   */

  $roll1 = rand(1, 6); //rand() generates random numbers with a min and max value;
  $roll2 = rand(1, 6); //rand() generates random numbers with a min and max value;
  echo "<p>You rolled a {$roll1} and a {$roll2}</p>"; // double quotes and strings interpolations

  if ($roll1 == 6 || $roll2 == 6) {
    echo "<p class=\"green-text\">You Win!</p>";
  } else {
    echo "<p class=\"red-text\">Sorry, you lose! Try again refreshing the current page.</p>";
  }

  echo "<p>Thanks for playing.</p>"
?>