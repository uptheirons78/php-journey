<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="jokes.css">
  <link rel="stylesheet" href="form.css">
  <title><?php echo $title; ?></title>
</head>
<body>
  <header>
    <h1>Internet Jokes Database</h1>
  </header>
  <nav>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="jokes.php">Jokes List</a></li>
      <li><a href="addjoke.php">Add a new Joke</a></li>
    </ul>
  </nav>
  <main><?php echo $output; ?></main>
  <footer>&copy; IJDB <?php echo date('Y'); ?></footer>
</body>
</html>