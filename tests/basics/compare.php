<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 14:50
 */


$a = "0.0";
$b = (int)$a;
var_dump($b); // 0
$c = (boolean)$a;
var_dump($c); // true
$d = (bool)$b; // Not converted
var_dump($d);

if ( (boolean)$a === (bool)$b) {
    echo "True" . PHP_EOL;
} else {
    echo "False" . PHP_EOL;
}


$a = true;
$b = false;
$truth = $a && $b;
$pravda = $a and $b;
var_dump($truth == $pravda);