<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 02/07/2018
 * Time: 21:59
 */

$arr = [
  "fruits" => [
    "apple" => ["taste" => "sweet", "color" => "yellow"],
    "banana" => ["taste" => "sour", "color" => "green"],
    "cherry" => ["taste" => "sweet", "color" => "red"]
  ],
  "vegetables" => "yuck"
];
$str = json_encode($arr);
$decode = json_decode($str, true, 1);
var_dump($decode);
echo json_last_error_msg() . PHP_EOL; // Maximum stack depth exceeded


$emptyArray = [];
$encode = json_encode($emptyArray, JSON_FORCE_OBJECT);
$decode = json_decode($encode);
echo gettype($decode); // object
