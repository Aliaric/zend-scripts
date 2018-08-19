<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 21/06/2018
 * Time: 17:26
 */

// numeric index, auto assigned key
$arr = array(10, 'abc', 30);
// numeric index, key explicitly set
$arr = array(0 => 10, 1 => 'abc', 2 => 30 );
// associative
$arr = array('name' => 'foo', 'age' => 20);
// short syntax
$arr = ['name' => 'foo', 'age' => 20];

$shortForm = ['this', 'is', 'short'];
$longForm = array('this', 'is', 'long');

$arr = ['name' => 'foo', 'age' => 20];
echo $arr['age']; // 20


$arr = [0 => 'id', 'name' => 'foo', 'age' => 20];
$arr[] = 'example';
print_r($arr);

//Array
//(
//  [0] => id
//  [name] => foo
//[age] => 20
//[1] => example
//)

echo 0x13 . PHP_EOL; //19
$a = [
  "2" =>"hello",
  0x13 =>"world",// 19
  0b100 => ' this is ', //4
  "04" =>"PHP",
  8.7 =>"!!!!"
];
var_dump($a);
/*
array(5) {
  [2]=>
  string(5) "hello"
  [3]=>
  string(5) "world"
  [4]=>
  string(9) " this is "
  ["04"]=>
  string(3) "PHP"
  [8]=>
  string(4) "!!!!"
} */