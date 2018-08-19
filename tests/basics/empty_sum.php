<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 17:50
 */

$a = "0";
$c = $b = empty($a);
$d = ++$b + $a;
echo $d . PHP_EOL; //1

$a = 1.23;
$b = 4.56;
$c = (int)$a + (int)$b;
echo (double)$c; // 5