<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 11:57
 */

$a = true;
$b = false;
// "and" have low priority. Equal comes first
$truth = $a and $b;  // true
$pravda = $a && $b;  // false
assert($truth === $pravda);
/*
    Warning: assert(): assert($truth === $pravda) failed
*/


$a = true;
$b = $a ?: 'foo';
echo $b; // 1
echo "\n";
var_dump ($b);   // true
echo "\n";

$defaultSortDir = 12;
//$_GET['sort_dir'] = "fuck\n";
// Long form ternary syntax
// Similar to ternary with "isset" function,
echo  (isset($_GET['sort_dir'])) ? $_GET['sort_dir'] : 'ASC' . PHP_EOL;
// Equivalent syntax using the null coalescing operator
echo  $_GET['sort_dir'] ?? 'ASC' . PHP_EOL;
// The null-coalesce operator can be chained
echo  $_GET['sort_dir'] ?? $defaultSortDir ?? 'ASC' . PHP_EOL;
// The Elvis operator raises E_NOTICE if the GET variable is not set
echo  $_GET['sort_dir'] ?: 'ASC' . PHP_EOL;

// Spaceship
echo (1 <=> 2) . PHP_EOL; // combined comparison (-1)


$a = 50; // 0b110010
$b = 25; // 0b011001
$c = 50 & 25; // 0b010000
echo $c; // 16
echo "\n";

$x = 1;
echo $x << 32; // 4294967296
echo PHP_EOL;
var_dump($x); // int(1)
echo "\n";
// Exponential expression
echo $x * pow(2, 32); // 4294967296
echo "\n";
echo ~52 . PHP_EOL; // -53


$a = 123;
$a += 345;    // equivalent to $a = $a + 345;
$a .= 'foo';  // equivalent to $a = $a . 'foo';


$a = 1;
$b = &$a;  // assign by reference
$b += 5;
echo $a . PHP_EOL;  // 6

class MyClass {}
// Parse error: syntax error, unexpected 'new'
$a = new MyClass;

$a = [2]; // int(100)
$b = 100;
var_dump($a);
echo ($a <=> $b); // 0 (equal)
echo PHP_EOL;
// This is the equivalent of echo shell_exec('whoami');
 echo `whoami`;