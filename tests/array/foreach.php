<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 07/07/2018
 * Time: 11:41
 */

$array = array("red","green","blue");
$last_key = end(array_keys($array));
foreach ($array as $key => $value) {
    if ($key == $last_key) {
        echo "a" . PHP_EOL;
} else {
        echo "b" . PHP_EOL;
}
}
//bba