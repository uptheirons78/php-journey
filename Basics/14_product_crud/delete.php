<?php
$dsn = "mysql:host=localhost;port=80;dbname=products_crud;charset=utf8";
$pdo = new PDO($dsn, 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_POST['id'] ?? null;

if (!$id) {
  header('Location: index.php');
  exit;
}

$statement = $pdo->prepare('DELETE FROM products WHERE id = :id');
$statement->bindValue(':id', $id);
$statement->execute();

header("Location: index.php");