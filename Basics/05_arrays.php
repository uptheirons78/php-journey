<?php

// Create array
$arr = array('apple', 'banana', 'pear');
$arr2 = ['apple', 'banana', 'pear'];

// Print the whole array
echo '<pre>';
var_dump($arr);
echo '</pre>';
// Get element by index
echo $arr[1] . '<br>';

// Set element by index
$arr[0] = 'peach';
$arr[3] = 'coconut';
var_dump($arr);

// Check if array has element at index 2
isset($arr[1]); //true
isset($arr[4]); //false

// Append element
$arr[] = 'lemon';
echo '<br>';
var_dump($arr);
echo '<br>';

// Print the length of the array
echo count($arr);
echo '<br>';

// Add element at the end of the array
array_push($arr, 'orange');
var_dump($arr);
echo '<br>';

// Remove element from the end of the array
echo array_pop($arr);
echo '<br>';
var_dump($arr);
echo '<br>';
// Add element at the beginning of the array
array_unshift($arr, 'prunes');
var_dump($arr);
echo '<br>';
// Remove element from the beginning of the array
echo array_shift($arr);
echo '<br>';
var_dump($arr);
echo '<br>';
// Split the string into an array
$str = 'Banana,Apple,Orange';
var_dump(explode(",", $str));
echo '<br>';
// Combine array elements into string
$anotherArr = array("foo", "faa", "bar");
echo implode("&", $anotherArr);
echo '<br>';
// Check if element exist in the array
var_dump(in_array("faa", $anotherArr));
echo '<br>';
// Search element index in the array
var_dump(array_search('bar', $anotherArr));
echo '<br>';
// Merge two arrays
$a = array(0, 1, 2);
$b = array(3, 4, 5);
var_dump(array_merge($a, $b));
echo '<br>';
var_dump(array(...$b, ...$a));
echo '<br>';
// Sorting of array (Reverse order also)
sort($arr);
var_dump($arr);
echo '<br>';
rsort($arr);
var_dump($arr);

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

// Get element by key

// Set element by key

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

// Print the keys of the array

// Print the values of the array

// Sorting associative arrays by values, by keys


// Two dimensional arrays