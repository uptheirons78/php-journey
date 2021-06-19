<?php
function lines() {
  echo '<br>' . '-------' . '<br>';
}
// Function which prints "Hello I am Zura"
function hello() {
  echo "Hello I am Mauro";
}
hello();
lines();
// Function with argument
function hello2($name) {
  return "Hello I am $name";
}
echo hello2('Pippo');
lines();
// Create sum of two functions
function sum($a, $b) {
  return $a + $b;
}
echo sum(7, 9);
lines();
// Create function to sum all numbers using ...$nums
function sum2(...$nums) {
  $counter = 0;
  for($i = 0; $i < count($nums); $i++) {
    $counter += $nums[$i];
  }
  return $counter;
}

echo sum2(1,2,3,4,5,5);
lines();

// Arrow functions
function sum3(...$nums) {
  return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
echo sum3(1,2,3,4,5,5);
lines();