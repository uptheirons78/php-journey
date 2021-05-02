<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Name in PHP</title>
</head>
<body>
  <?php
  /**
   * Inside this file:
   * - Superglobal $_GET: it is an array automatically created by PHP that contains any values passed in the URL query string. It is an associative array.
   * - Superglobal $_POST: a PHP super global variable which is used to collect form data after submitting an HTML form with method="post".
   * - . string concatenation operator (a dot)
   * - sanitize your PHP code with htmlspecialchars
   * - ENT-QUOTES (PHP constant) and UTF-8
   * - __DIR__ : it contains the path that contains the current file
   */
    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    echo 'Welcome to our website, ' . htmlspecialchars($firstName, ENT_QUOTES, 'UTF-8') . ' ' . htmlspecialchars($lastName, ENT_QUOTES, 'UTF-8');
    echo "<br>";
    print_r($_POST);
    echo "<br>";
    echo __DIR__;
  ?>
</body>
</html>