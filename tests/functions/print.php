<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 14:12
 */

function bird($message) {
    function nest($string) { // Globas scope is
        echo $string;
    }
    nest($message);
}
bird('hello');
echo " ";
nest('world');
echo PHP_EOL;
function f(stdClass &$x= NULL) {
    $x = 42;
}
$z = new stdClass();
f($z);
var_dump($z);