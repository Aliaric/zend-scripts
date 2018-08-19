<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 29/06/2018
 * Time: 16:32
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
echo json_last_error_msg(); // Maximum stack depth exceeded