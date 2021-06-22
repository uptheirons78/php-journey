<?php
  function square($a) {
    return $a * $a;
  }

  function add(...$args) {
    $arr = array(...$args);
    return array_reduce($arr, fn($carry, $item) => $carry += $item);
  }
?>