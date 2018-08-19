<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 20:15
 */

$a = array('one','two');
$b = array('three','four','five');
var_dump($a + $b);
echo count($a + $b); // 3

$a = array('three','four','five');
$b = array('one','two');
echo count($a - $b); // Fatal error: Uncaught Error: Unsupported operand types