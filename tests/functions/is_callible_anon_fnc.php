<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 16:41
 */

if (!is_callable(function(){echo "Hello";})) {
    function sayHello() {
        echo "World!";
    } }
sayHello(); // Fatal error: Uncaught Error: Call to undefined function sayHello()