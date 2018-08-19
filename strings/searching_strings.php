<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 20/06/2018
 * Time: 13:23
 */

$arr = ['a', 'b', 'c', 'd', 'e', 'f' ];
$str = 'abcdef';
echo strpos($str, 'c') . PHP_EOL; // 2
echo array_search('c', $arr) . PHP_EOL; // 2

$string = 'abcdef';
var_dump(strpos($string, 'a') ); // 0
if (strpos($string, 'a') == false) {
    echo "False negative!" . PHP_EOL;
}