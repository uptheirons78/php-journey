<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8', 'Mauro', 'bnoRRT50');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'DELETE FROM joke WHERE id = :id';

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(':id', $_POST['id']);

    $stmt->execute();

    header('location: jokes.php');

  } catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
  }
