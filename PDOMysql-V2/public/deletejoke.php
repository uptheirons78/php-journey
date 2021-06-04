<?php
  try {
    include __DIR__ . '/../includes/DatabaseConnection.php';
    include __DIR__ . '/../includes/DatabaseFunctions.php';

    // deleteJoke($pdo, $_POST['id']);

    /**
     * Use generic delete() function
     */
    delete($pdo, 'joke', 'id', $_POST['id']);

    header('location: jokes.php');

  } catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
  }
