<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 13:28
 */

function addOne(&$arg) {
    $arg++;
}

$a = 0;
addOne($a);
// addOne(&$a); // fatal error as of PHP 5.4.0
echo $a; // 1