<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname:ijdb', 'Mauro', 'bnoRRT50');
    $output = 'Connected to the database.';
  } catch (PDOException $e) {
    $output = 'Unable to connect to the database: ' . $e;
  }
  include __DIR__ . '/../templates/output.html.php';
?>
