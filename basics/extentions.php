<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 15:10
 */

if (!extension_loaded('gd')) {
    if (!dl('gd.so')) {
        exit;
    }
}

$a = get_loaded_extensions();
var_dump ($a);
$a = "Hello";
$B = " world";
ECHO $a . $b; // variable Case sensitive. Functions - not.
