<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 27/07/2018
 * Time: 15:04
 */

function f(stdClass &$x = NULL) {
    $x = 42;
}
$z = new stdClass();
f($z);
var_dump($z); // 42
echo PHP_EOL;
class test {
    public $value = 0;
    function test() {
        $this->value = 1;
    }
    function __construct()
    {
        $this->value = 2;
    }
}

$object = new test();
echo $object->value;