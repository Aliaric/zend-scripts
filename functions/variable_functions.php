<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 13:30
 */

function foo($a) {

    echo $a;
}
$var = 'foo';
$var(123); // 123

$glob = "Global variable";
function myFunction() {
    global $glob; // first method
    $glob = $GLOBALS['glob']; // second method
    $glob = "Changed";
}
myFunction();
echo $glob;  // Changed