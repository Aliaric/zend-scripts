<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 20:29
 */

$arr = [1,2,3,4,5];
$spliced = array_splice($arr, 2, 1);
var_dump($spliced);
$number = array_shift($arr);
echo $number; // 1