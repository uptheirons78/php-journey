<?php
  $dsn = 'mysql:host=localhost;dbname=ijdb;charset=utf8';
  $username = 'Mauro';
  $password = 'bnoRRT50';
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);