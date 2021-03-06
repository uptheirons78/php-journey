<?php
  try {
    $pdo = new PDO('mysql:host=localhost;dbname=ijdb;charset=utf8', 'Mauro', 'bnoRRT50');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'SELECT id, joketext FROM ijdb.joke';
    $jokes = $pdo->query($sql);

    $title = 'Jokes List';

    // Start the buffer
    ob_start();

    // Include the template. The PHP code will be executed,
    // but the resulting HTML will be stored in the buffer
    // rather than sent to the browser.
    include __DIR__ . '/../templates/jokes.html.php';

    // Read the contents of the output buffer and
    // store them in the $output variable for use
    // in layout.html.php
    $output = ob_get_clean();

  } catch (PDOException $e) {
    $title = 'An error has occurred';
    $output = 'Database error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine();
  }

  include __DIR__ . '/../templates/layout.html.php';
?>