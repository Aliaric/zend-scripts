<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 18:57
 */

$array = array("1","2","3","4");
$variable = end(array_keys($array));
echo $variable; // 3 || because array_keys

echo PHP_EOL;

$array = array(1,2,3);
while (list(,$v) = each($array));
var_dump($array);