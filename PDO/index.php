<?php
  try {
    $dsn = "mysql:host=localhost;dbname=pdo_test";
    $username = "root";
    $password = "";
    $pdoConnection = new PDO($dsn, $username, $password);
    $pdoConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdoConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  } catch(PDOException $e) {
    echo $e->getMessage();
  }

  /** QUERY WITH PREPARED STATEMENT */
  /**
  $name = "Francesco";
  $username = "Chicco71";
  $q = "SELECT * FROM User WHERE name = :namePl AND username = :usernamePl";
  $st = $pdoConnection->prepare($q);
  $st->execute(['namePl' => $name, 'usernamePl' => $username]);
  var_dump($st->fetchAll());
 */

  /** QUERY WITH BIND PARAMETERS */
  $q = "SELECT * FROM User WHERE name LIKE :likePl LIMIT :limitPl ";
  $like = "M%";
  $limit = 10;
  $st = $pdoConnection->prepare($q);
  $st->bindParam(':likePl', $like, PDO::PARAM_STR);
  $st->bindParam(':limitPl', $limit, PDO::PARAM_INT);
  $st->execute();
  var_dump($st->fetchAll());


  // $st = $pdoConnection->query("SELECT * FROM User");

  // Method: fetch()
  // while ($record = $st->fetch()){
  //   echo $record['name'] . '<br>';
  // }

  // Method: fetchAll()
  // $record = $st->fetchAll();
  // var_dump($record);