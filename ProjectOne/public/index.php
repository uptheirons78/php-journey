<?php

/**
 * Inside this file:
 * - isset(): a built-in PHP function that will tell you if a particular variable (or array element) has been assigned a value or not. It returns true or false;
 * - ! the not operator;
 * - __DIR__ : used to obtain the current code working directory;
 */
if (!isset($_POST['firstname'])) {
  include  __DIR__ . '/../templates/form.html.php';
} else {
  $firstName = $_POST['firstname'];
  $lastName = $_POST['lastname'];

  if ($firstName == 'Mauro' && $lastName == 'Bono') {
    $output = 'Welcome, oh glorious leader!';
  } else {
    $output = 'Welcome to our website, ' .
      htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' .
      htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8') . '!';
  }

  include  __DIR__ . '/../templates/welcome.html.php';
}
