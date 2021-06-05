<?php

function query($pdo, $sql, $parameters = [])
{
  $query = $pdo->prepare($sql);
  $query->execute($parameters);
  return $query;
}


function totalJokes($pdo)
{
  $query = query($pdo, 'SELECT COUNT(*) FROM `joke`');
  $row = $query->fetch();
  return $row[0];
}



function getJoke($pdo, $id)
{

  //Create the array of `$parameters` for use in the `query` function
  $parameters = [':id' => $id];


  //call the query function and provide the `$parameters` array
  $query = query($pdo, 'SELECT * FROM `joke` WHERE `id` = :id', $parameters);

  return $query->fetch();
}

/** New version of insertJoke */
function insertJoke($pdo, $fields)
{
  $query = 'INSERT INTO `joke` (';

  foreach ($fields as $key => $value) {
    $query .= '`' . $key . '`,';
  }

  $query = rtrim($query, ',');

  $query .= ') VALUES (';


  foreach ($fields as $key => $value) {
    $query .= ':' . $key . ',';
  }

  $query = rtrim($query, ',');

  $query .= ')';

  $fields = processDates($fields);

  query($pdo, $query, $fields);
}


/** New version of updateJoke() */
function updateJoke($pdo, $fields)
{

  $query = ' UPDATE `joke` SET ';

  foreach ($fields as $key => $value) {
    $query .= '`' . $key . '` = :' . $key . ',';
  }

  $query = rtrim($query, ',');

  $query .= ' WHERE `id` = :primaryKey';

  //Set the :primaryKey variable
  $fields['primaryKey'] = $fields['id'];

  $fields = processDates($fields);

  query($pdo, $query, $fields);
}

function deleteJoke($pdo, $id) {
  $parameters = [':id' => $id];

  query($pdo, 'DELETE FROM `joke` WHERE `id` = :id', $parameters);
}

function allJokes($pdo) {
  $jokes = query($pdo, 'SELECT `joke`.`id`, `joketext`, `jokedate`, `name`, `email` FROM `joke` INNER JOIN `author` ON `authorid` = `author`.`id` ');
  return $jokes->fetchAll();
}

function processDates($fields) {
  foreach($fields as $key => $value) {
    if ($value instanceof DateTime) {
      $fields[$key] = $value->format('Y-m-d');
    }
  }
  return $fields;
}

function allAuthors($pdo) {
  $query = 'SELECT * FROM `author`';
  $authors = query($pdo, $query);
  return $authors->fetchAll();
}

function deleteAuthor($pdo, $id) {
  $paramenters = [':id' => $id];
  $query = 'DELETE FROM `author` WHERE `id` = :id';
  query($pdo, $query, $paramenters);
}

function insertAuthor($pdo, $fields) {
  $query = 'INSERT INTO `author` (';

  foreach($fields as $key => $value) {
    $query .= '`' . $key . '`,';
  }

  $query = rtrim($query, ',');

  $query .= ') VALUES (';

  foreach($fields as $key => $value) {
    $query .= ':' . $key . ',';
  }

  $query = rtrim($query, ',');

  $query .= ')';

  $fields = processDates($fields);

  query($pdo, $query, $fields);

}

/**
 * Generic functions
 */

function findAll($pdo, $table) {
  $query = 'SELECT * FROM `' . $table . '`';
  $result = query($pdo, $query);
  return $result->fetchAll();
}

function delete($pdo, $table, $primaryKey, $id) {
  $paramenters = [':id' => $id];
  $query = 'DELETE FROM `' . $table . '` WHERE `' . $primaryKey .'` = :id';
  query($pdo, $query, $paramenters);
}

function insert($pdo, $table, $fields) {
  $query = 'INSERT INTO `' . $table . '` (';

  foreach ($fields as $key => $value) {
    $query .= '`' . $key . '`,';
  }

  $query = rtrim($query, ',');

  $query .= ') VALUES (';


  foreach ($fields as $key => $value) {
    $query .= ':' . $key . ',';
  }

  $query = rtrim($query, ',');

  $query .= ')';

  $fields = processDates($fields);

  query($pdo, $query, $fields);
}

function update($pdo, $table, $primaryKey, $fields) {

  $query = ' UPDATE `' . $table . '` SET ';

  foreach ($fields as $key => $value) {
    $query .= '`' . $key . '` = :' . $key . ',';
  }

  $query = rtrim($query, ',');

  $query .= ' WHERE `' . $primaryKey . '` = :primaryKey';

  //Set the :primaryKey variable
  $fields['primaryKey'] = $fields['id'];

  $fields = processDates($fields);

  query($pdo, $query, $fields);
}

function findById($pdo, $table, $primaryKey, $value) {
  $query = 'SELECT * FROM `' . $table . '` WHERE `' . $primaryKey . '` = :value';
  $parameters = ['value' => $value];
  $result = query($pdo, $query, $parameters);
  return $result->fetch();
}

function total($pdo, $table) {
  $query = 'SELECT COUNT(*) FROM `' . $table . '`';
  $result = query($pdo, $query);
  $row = $result->fetch();
  return $row[0];
}

function save($pdo, $table, $primaryKey, $record) {
  try {
    if($record[$primaryKey] == '') {
      $record[$primaryKey] = null;
    }
    insert($pdo, $table, $record);
  } catch (PDOException $e) {
    update($pdo, $table, $primaryKey, $record);
  }
}

