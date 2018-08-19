<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 21/06/2018
 * Time: 13:32
 */

var_dump(1 > "abc"); // true
var_dump(0 > "abc"); // false
var_dump(-1 > "abc"); // true



$fact = "Dogs do nothing but sleep";
$fact = strtr($fact, "Dog", "Cat");
echo $fact . PHP_EOL; // Cats da nathint but sleep

$str = "🐊 one of the following";
echo str_replace('🐊', "Check", $str);