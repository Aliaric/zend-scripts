<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 12:56
 */

function addOne(&$arg) {
    $arg++;
}
$a = 0;
addOne($a); //It depends on what version of PHP you’re using
echo $a . PHP_EOL;

