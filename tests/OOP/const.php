<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 24/07/2018
 * Time: 13:54
 */

define('PI', 3.14);

class T {
    const PI = PI;
    const A = 42 + 1;
    var $v = 123;
}

class Math {
    const PI = T::PI;
    const B = T::A;
//    const C = T::v;
}

echo Math::PI;
echo PHP_EOL;
echo Math::B;