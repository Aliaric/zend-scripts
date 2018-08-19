<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 15:43
 */

define('A', 1);
const B = 2;
define('C', [A * A, B * B]);
echo(C[1]) . PHP_EOL; // 4

define('PI', 3.14159625);
define('_PI', "3.1459625");
$radius = 10;
if (PI == _PI) { // because double, if int - should be - 300
    $area = (int)PI * $radius ** 2;
    echo $area . PHP_EOL;
} else {
    echo "Indiana" . PHP_EOL; // this
}

function HelloWorld() {
    echo HELLO . PHP_EOL;
}
const HELLO = "Hello World!";
HelloWorld();