<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname:ijdb;charset=utf8', 'Mauro', 'bnoRRT50');
    $pdo->setAttribute(
      PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION
    );
    $output = 'Connected to the database.';
  } catch (PDOException $e) {
    $output = 'Unable to connect to the database: ' . $e->getMessage() . ' in ' . $e->getFile() . ' line: ' . $e->getLine();
  }
  include __DIR__ . '/../templates/output.html.php';
?>
