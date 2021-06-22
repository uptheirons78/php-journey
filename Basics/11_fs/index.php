<?php
// Magic constants
echo __DIR__ . '<br>';
echo __FILE__ . '<br>';
echo __LINE__ . '<br>';

// Create directory
// mkdir('pippo');

// Rename directory
// rename('pippo', 'pappola');

// Delete directory
// rmdir('pappola');

// Read files and folders inside directory
$files = scandir('../');
echo '<pre>';
var_dump($files);
echo '</pre>';


// file_get_contents, file_put_contents
echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', 'Supercalifragilistichespiralitoso');
echo '<br>';

// file_get_contents from URL
$endpoint = 'https://jsonplaceholder.typicode.com/users';
$usersJSON = file_get_contents($endpoint);
$users = json_decode($usersJSON);
echo '<br>';
echo '<br>';
echo '<pre>';
var_dump($users);
echo '</pre>';
echo '<br>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists
file_exists('sample.txt'); //true
// is_dir
is_dir('sample'); // false
// filemtime
// filesize
// disk_free_space
$filename = 'sample.txt';
if (file_exists($filename)) {
  echo "$filename was last modified: " . date("F d Y H:i:s.", filemtime($filename));
  echo '<br>';
  echo $filename . ': ' . filesize($filename) . ' bytes';
  echo '<br>';
  echo diskfreespace('/');

}