<?php

// Create simple string
$string = 'Hello World';
$string2 = "Hello World 2";
$hello = 'Hello ';
$world = 'World';
$helloWorld = "{$hello} {$world}";

// String concatenation
echo $hello . $world . '<br>';
// String functions
$string = " Hello World    ";
echo "1 - " . strlen($string) . "<br>";
echo "2 - " . trim($string) . "<br>";
echo "3 - " . ltrim($string) . "<br>";
echo "4 - " . rtrim($string) . "<br>";
echo "5 - " . str_word_count($string) . "<br>";
echo "6 - " . strrev($string) . "<br>";
echo "7 - " . strtoupper($string) . "<br>";
echo "8 - " . strtolower($string) . "<br>";
echo "9 - " . ucfirst($string) . "<br>";
echo "10 - " . lcfirst($string) . "<br>";
echo "11 - " . ucwords($string) . "<br>";
echo "12 - " . strpos($string, 'world') . "<br>";
echo "13 - " . stripos($string, 'world') . "<br>";
echo "14 - " . substr($string, 8, 6) . "<br>";
echo "15 - " . str_replace('World', 'PHP', $string) . "<br>";
echo "16 - " . str_ireplace('world', 'PHP', $string) . "<br>";


// Multiline text and line breaks
$text = "
  Hello, my name is Mauro,
  I want to master PHP,
  I love my wife and my daughter
";
echo $text . '<br>';
echo nl2br($text) . '<br>';


// Multiline text and reserve html tags
$text2 = "
  Hello, my name is <b>Mauro</b>,
  I want to master <b>PHP</b>,
  I love my wife and my daughter
";
echo $text2 . '<br>';
echo nl2br($text2) . '<br>';
echo htmlentities($text2) . '<br>';
echo nl2br(htmlentities($text2));

// https://www.php.net/manual/en/ref.strings.php