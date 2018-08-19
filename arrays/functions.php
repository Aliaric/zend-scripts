<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 21/06/2018
 * Time: 17:33
 */

// The delimiter is a string of any length
$delimiter = ',';

// This string is broken up by the delimiter
$source = '1, abc, 2, def, 3, ghi';
// The limit determines how many elements explode will return
$limit = -2;
// create an array by splitting the source
$arr = explode($delimiter, $source, $limit);
print_r($arr);

/*
  Array
(
    [0] => 1
    [1] =>  abc
    [2] =>  2
    [3] =>  def
)
 */


$input = '12345678';
$arr = str_split($input, 3);
print_r($arr);
/*
Array
(
  [0] => 123
    [1] => 456
    [2] => 78
)
*/
print_r(
  array_combine( // combine arrays
    range(1, 10, 2),range(1,5)
  )
);
/* Array
(
    [1] => 1
    [3] => 2
    [5] => 3
    [7] => 4
    [9] => 5
) */
print_r(array_fill(10, 5, 'five'));
/*
Array
(
  [10] => five
  [11] => five
  [12] => five
  [13] => five
  [14] => five
)
*/
$keys = range(1, 10, 2);
$value = "PHP";
print_r(array_fill_keys($keys, $value));

/*
Array
(
    [1] => PHP
    [3] => PHP
    [5] => PHP
    [7] => PHP
    [9] => PHP
) */

$stack = array("one", "two", "three", "four");
$fruit = array_shift($stack);
print_r($stack);

/* Array
  (
    [0] => two
    [1] => three
    [2] => four
) */

$birds = ['duck', 'chicken', 'goose'];
$net = ['Dog', 'Cat', 'Chicken', 'Goose', 'Hamster'];
$diff = array_udiff($net, $birds, function($a, $b){
    $a = strtolower($a);
    $b = strtolower($b);
    if ($a < $b) {
        return -1;
    } elseif ($a > $b) {
        return 1;
    } else {
        return 0; }
});
print_r($diff);
/*
 Array
(
    [0] => Dog
    [1] => Cat
    [4] => Hamster
)
 */
$input = ['a', 'b', 'c'];
$replace = [3 => 'd', '1' => 'q'];
$replaceTwo = [2 => 1, 1.3 => 'Z'];
$output = array_replace($input, $replace, $replaceTwo);
echo implode(", ", $output) . PHP_EOL; // a, Z, 1, d

$arrOne = [
    // integer
  0 => 'One 0',
    // string
  'a' => 'One a',
    // non-empty in One, but empty in Two
  'Overwrite' => 'Not empty',
];
$arrTwo = [
  0 => 'Two 0',
  1 => 'Two 1',
  'b' => 'Two b',
  'Overwrite' => '',
];

print_r($arrOne + $arrTwo);
/*
Array
(
    [0] => One 0
    [a] => One a
    [Overwrite] => Not empty
    [1] => Two 1
    [b] => Two b
)
)
*/
print_r(array_merge($arrOne, $arrTwo));
/*
Array
(
    [0] => One 0
    [a] => One a
    [Overwrite] =>
    [1] => Two 0
    [2] => Two 1
    [b] => Two b
)
 */

$input = [1,2,3];
$replacement = ['hello', 'world'];
// $slice contains the piece we extract
$slice = array_splice($input, 1, 1, $replacement);
// $input is passed by reference and so is amended
print_r($input);

/*
 * Array (
    [0] => 1
    [1] => hello
    [2] => world
    [3] => 3
)
 */

$array = ['one', 'two', 'three'];
list($a, $b, $c) = $array;
echo $a; // one
echo $b; // two
echo $c; //three
list($indexedArray[0], $indexedArray[1], $indexedArray[2]) = $array;
var_dump($indexedArray);
/*
array(3) {
    [0]=>
  string(3) "one"
    [1]=>
  string(3) "two"
    [2]=>
  string(5) "three"
}
*/