<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 15/06/2018
 * Time: 14:45
 */

$a = (boolean)true; // booean == bool
$b = (bool)true;
var_dump($a === $b);  // bool(true)
$_23 = 123;

$a = '123'; // $a is a string
$a = (int)$a; // $a is now an integer
$a = (bool)$a; // $a is now Boolean and is true




$a = "Hello World";
$a = (unset)$a; // Deprecated in PHP 7.2
var_dump($a);   // NULL

$a = 1234.56 . PHP_EOL;
echo (int)$a;    // 1234 (not 1235)
$a = -1234.56 . PHP_EOL;
echo (int)$a;    // -1234

$examples = [
  "12 o clock",
  "Half past 12",
  "12.30",
  "7.2e2 minutes after midnight"
];
foreach ($examples as $example) {
    $result = 0 + $example; // Warning
    var_dump($result);
}
/*
This outputs:
    int(12)
    int(0)
    double(12.3)
    double(720)
*/

echo (int) ( (0.1+0.7) * 10 ) . "\n"; // 7
echo (int) ( (0.1+0.5) * 10) .  "\n"; // 6

$pi = 3.14159625;
$indiana = 3.2;
$epsilon = 0.00001; // degree of error
$abs = abs($pi - $indiana) < $epsilon; // false
echo "Absolute value: " . abs($pi - $indiana) . PHP_EOL; // 0.05840375
var_dump($abs);
if ($abs < $epsilon) {
    echo "Those values look the same to me";
} else {
    echo "Those values are different";
}

