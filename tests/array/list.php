<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 20:24
 */

$array = [
  [1, 2],
  [3, 4],
  ];
foreach ($array as list($a, $b)) {
    echo "A: $a; B: $b" . PHP_EOL;
}
/*
A: 1; B: 2
A: 3; B: 4
 */