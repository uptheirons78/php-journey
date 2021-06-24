<?php
$dsn = "mysql:host=localhost;port=80;dbname=products_crud;charset=utf8";
$pdo = new PDO($dsn, 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$search = $_GET['search'] ?? '';

if($search) {
  $statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
  $statement->bindValue(':title', "%$search%");
} else {
  $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}

$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="app.css">

  <title>Products CRUD Application</title>
</head>

<body>
  <!-- Page Title -->
  <h1>Products CRUD Application</h1>
  <!-- Page Title End -->
  <!-- Create Button -->
  <p>
    <a href="create.php" class="btn btn-success">Create Product</a>
  </p>
  <!-- Create Button End -->
  <!-- Quick Search -->
  <form action="">
    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Search for products" name="search" value="<?php echo $search; ?>">
      <button class="input-group-text" type="submit">Search</button>
    </div>
  </form>
  <!-- Quick Search End -->
  <!-- Table -->
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Title</th>
        <th scope="col">Price</th>
        <th scope="col">Create Date</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($products as $i => $product) : ?>
        <tr>
          <th scope="row"><?php echo $i + 1; ?></th>
          <td>
            <img class="thumb-image" src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>">
          </td>
          <td><?php echo $product['title'] ?></td>
          <td><?php echo $product['price'] ?></td>
          <td><?php echo $product['create_date'] ?></td>
          <td>
            <a href="update.php?id=<?php echo $product['id'] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
            <form method="post" action="delete.php" style="display:inline-block">
              <input type="hidden" name="id" value="<?php echo $product['id'] ?>">
              <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
  <!-- Table End-->
</body>

</html>