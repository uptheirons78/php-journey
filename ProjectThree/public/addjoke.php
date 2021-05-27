<?php
  if (isset($_POST['joketext'])) {
    try {
      $pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8', 'Mauro', 'bnoRRT50');

      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // SQL QUERY FROM THE BOOK
      // $sql = 'INSERT INTO joke SET joketext = :joketext, jokedate = CURDATE()';

      // STANDARD SQL QUERY
      $sql = 'INSERT INTO joke (joketext, jokedate) VALUES (:joketext, CURDATE())';

      $stmt = $pdo->prepare($sql);

      $stmt->bindValue(':joketext', $_POST['joketext']);

      $stmt->execute();

      header('location: jokes.php');

    } catch (PDOException $e) {
      $title = 'An error has occurred';
      $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
    }
  } else {
    $title = 'Add a new joke';
    ob_start();
    include __DIR__ . '/../templates/addjoke.html.php';
    $output = ob_get_clean();
  }
  include __DIR__ . '/../templates/layout.html.php';
?>