<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 19:45
 */

$array = array(0 => "blue", 1 => "red", 2 => "green", 3 => "red");

echo array_search("green", $array) . PHP_EOL; // 2
echo in_array("green", $array) . PHP_EOL; // true(1)
echo array_key_exists(2, $array) . PHP_EOL; // true(1)
echo array_search("red",$array) . PHP_EOL; // 1

$numbers=array();
$numbers[1] = 1;
$numbers[2] = 2;
$numbers[3] = 3;
$numbers[4] = 4;
$key= array_search(3,$numbers); //
unset($numbers[$key]);
print_r($numbers); // 1, 2, 4