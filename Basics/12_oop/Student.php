<?php

require_once __DIR__ . '/Person.php';

class Student extends Person {
  public string $studentId;

  public function __construct($name, $surname, $studentId)
  {
    parent::__construct($name, $surname);
    $this->studentId = $studentId;
  }
}