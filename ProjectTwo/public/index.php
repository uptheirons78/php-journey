<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname:ijdb;charset=utf8', 'Mauro', 'bnoRRT50');
    $pdo->setAttribute(
      PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION
    );
    $output = 'Connected to the database.<br>';
    $sql = 'SELECT joketext FROM ijdb.joke';
    $result = $pdo->query($sql);
    while($row = $result->fetch()) {
      $jokes[] = $row['joketext'];
    }
    // var_dump($jokes);
  } catch (PDOException $e) {
    $error = 'Unable to connect to the database: ' . $e->getMessage() . ' in ' . $e->getFile() . ' line: ' . $e->getLine();
  }
  include __DIR__ . '/../templates/jokes.html.php';
?>
