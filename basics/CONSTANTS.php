<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 11:06
 */

define('PI', 3.142);
echo PI;
echo "\n";
define('UNITS', ['MILES_CONVERSION' => 1.6, 'INCHES_CONVERSION' => '2.54']);
echo "5km in miles is " . 5 * UNITS['MILES_CONVERSION'];
echo "\n";
/*
  5km in miles is 8
*/

const UNITS2 = ['MILES_CONVERSION' => 1.6,
  'INCHES_CONVERSION' => '2.54'];
echo "5km in miles is " . 5 * UNITS2['MILES_CONVERSION'] . PHP_EOL;
/*
  5km in miles is 8
*/

$a = 123;
const STORAGE_PATH = __DIR__ . '/storage';
// You cannot assign a variable to a constant.
//const ABC = $a;

const MILES_CONVERSION = 1.6;
echo 'There are ' . constant('MILES_CONVERSION') . ' miles in a kilometer';
/*
  There are 1.6 miles in a kilometer
*/