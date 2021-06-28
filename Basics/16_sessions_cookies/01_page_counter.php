<?php
session_start();
$_SESSION['session_counter'] = $_SESSION['session_counter'] ?? 0;
$_SESSION['session_counter']++;
$pageCounter = $_SESSION['session_counter'] ?? 0;

if ($_SESSION['session_counter'] === 10) {
    echo 'Thanks for visiting us ten times';
    session_unset();
    session_destroy();
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>My Awesome page, you visited <?php echo $pageCounter ?> times</h1>
</body>
</html>
