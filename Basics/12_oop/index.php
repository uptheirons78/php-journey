<?php

require_once __DIR__ . '/Person.php';
require_once __DIR__ . '/Student.php';

// $p = new Person('Steve', 'Harris');
// $p->setAge(43);
// $p2 = new Person('Bruce', 'Dickinson');
// $p2->setAge(53);
// var_dump($p);
// echo '</pre>';
// echo '<br>';
// echo Person::$counter;

$student = new Student('Mimmo', 'Mammo', '12345');
$student->setAge(34);
echo '<pre>';
var_dump($student);
echo '</pre>';