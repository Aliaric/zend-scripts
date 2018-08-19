<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 20:20
 */

$keys = range(1, 6, 2);
var_dump($keys);

$arr = array_fill_keys($keys, 'PHP');
var_dump($arr);
krsort($arr);
var_dump($arr);
$arr = array_flip($arr); // because all values are PHP and only left last key as value
var_dump($arr);
echo $arr[3]; // 1