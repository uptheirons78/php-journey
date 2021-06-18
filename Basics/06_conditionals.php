<?php

$age = 20;
$salary = 300000;

// Sample if

// Without circle braces

// Sample if-else

// Difference between == and ===

// if AND

// if OR

// Ternary if
echo $age < 22 ? "young" : "old";
echo "<br>";
// Short ternary
$actualAge = $age ?: 18;
echo $actualAge;
echo "<br>";

// Null coalescing operator
$myName = $name ?? "John";
echo $myName;
echo "<br>";
// switch
$userRole = 'editor';

switch($userRole) {
  case 'admin':
    echo 'Admin';
    break;
  case 'editor':
    echo 'Editor';
    break;
  case 'user':
    echo 'User';
    break;
  default:
    echo 'Invalid Role';
}