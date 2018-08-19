<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 21/06/2018
 * Time: 20:44
 */

$a = ['a' => 'hello', 'b' => 'world'];
$b = ['a' => 'goodbye', 'c' => 'cruel'];
echo implode(' ', $a + $b) . PHP_EOL;  // hello world cruel



$a = ['a', 'b', '1'];
$b = ['a', 'b', 1];
$c = ['1', 'b', 'a'];
$d = [2 => 1, 0 => 'a', 1 => 'b'];
var_dump($a == $b); // true
var_dump($a === $b); // false
var_dump($a == $c); // false
var_dump($a == $d); // true
var_dump($a === $d); // false



$arr = ['1', '2', '3'];
$brr = [1, 2, 3];
var_dump($arr === $brr); // false
var_dump($arr == $brr);  // true

$requiredKeys = ['username', 'password', 'csrf_token'];
$missingKeys = array_diff($requiredKeys, array_keys($_POST));
if (count($missingKeys)) {
    throw new UnexpectedValueException('You need to provide
    [' . print_r($missingKeys, true) . ']');
}

$a = ['a' => 'apple', 'b' => 'banana'];
$b = ['a' => 'apple', 'd' => 'banana'];
print_r(array_diff($a, $b));
print_r(array_diff_assoc($a, $b));
/*
Array
(
)
Array
(
    [b] => banana
)
*/