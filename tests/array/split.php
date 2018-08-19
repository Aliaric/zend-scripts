<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 20:18
 */

$source = '12,23,34';
$arr = str_split($source, 2);
var_dump($arr);
echo count($arr); // 4?