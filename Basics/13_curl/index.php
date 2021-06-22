<?php

// curl_init()
// curl_setopt()
// curl_exec()
// curl_close()

$url = 'https://jsonplaceholder.typicode.com/users';
// Sample example to get data.
// $resource = curl_init($url);
// curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($resource);
// $info = curl_getinfo($resource, CURLINFO_HTTP_CODE, );
// echo 'Response code: ' . $info . '<br>';
// curl_close($resource);
// echo $result;

// POST REQUEST
$resource = curl_init();
$newUser = array(
  'name' => 'Mimmo',
  'surname' => 'Mammo',
  'email' => 'hello@mimmomammo.com'
);
curl_setopt_array($resource, array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_POST => true,
  CURLOPT_HTTPHEADER => ['content-type: application/json'],
  CURLOPT_POSTFIELDS => json_encode($newUser),
));

$result = curl_exec($resource);
curl_close($resource);
echo $result;