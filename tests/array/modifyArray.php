<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 24/07/2018
 * Time: 12:54
 */

function modifyArray(&$array) {
    foreach ($array as &$value) {
        var_dump($array);
        $value = $value + 1;
    }
    $value = $value + 2;

}
$array = [1,2,3];
modifyArray($array);
//var_dump($array);