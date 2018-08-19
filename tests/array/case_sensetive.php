<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 19:57
 */

$arr1 = ["A" => "apple", "B" => "banana"];
$arr2 = ["a" => "aardvark", "b" => "baboon"];
echo count($arr1 + $arr2) . PHP_EOL; // 4

$arr = ["one", "two", 1.5 => "three"];
echo $arr[1] .  PHP_EOL; // threes, double key converts to integer

$arr = [
  'a' => 'apple',
  'b' => 'banana',
  'c' => 'cherry'
];
$keys = array_keys($arr);
var_dump($keys);
if (in_array($keys, 'a')) { // Warning: in_array() expects parameter 2 to be array.
    // They should be misplaced
    echo "Found" . PHP_EOL;
}

$birds = ['duck', 'chicken', 'goose'];
$net = ['dog', 'cat', 'chicken', 'goose', 'hamster'];
echo count(array_intersect_assoc($net, $birds)); // 0, beacause of indexes are different