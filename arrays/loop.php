<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 18:29
 */

$arr = [
  'a' => 'apple',
  'b' => 'banana',
  'c' => 'cherry'
];
foreach($arr as $value) {
    echo $value . PHP_EOL;
}
foreach($arr as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}

$arr = [1,2,3];
foreach ($arr as $value) {
    $value += 1; }
echo implode(', ', $arr) . PHP_EOL; // 1, 2, 3
echo $value . PHP_EOL; // 4
foreach ($arr as &$value) {
    $value += 1; }
echo implode(', ', $arr) . PHP_EOL; // 2, 3, 4
echo $value;


// assigning to scalars
list($animal, $food, $mood) = ['cat', 'cheeseburgers', 'grumpy'];
echo "{$animal}s eat $food except when they're $mood." . PHP_EOL;
// assigning to an array
$info = [];
list($info[0], $info[1], $info[2]) = ['cat', 'cheeseburgers', 'grumpy'];
var_dump($info);
/*
cats eat cheeseburgers except when they're grumpy.
array(3) {
[0]=>
string(3) "cat"
  [1]=>
  string(13) "cheeseburgers"
  [2]=>
  string(6) "grumpy"
} */

$arr = [
  'a' => 'apple',
  'b' => 'banana',
  'c' => 'cherry'
];
while (list($var, $val) = each($arr)) {
    echo "$var is $val" . PHP_EOL;
}


$arr = [
  'a' => 'apple',
  'b' => 'banana',
  'c' => 'cherry'
];
array_walk($arr, function(&$value, $key) {
    $value = strtoupper($value);
});
print_r($arr);