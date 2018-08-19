<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 13:09
 */
class MyObject {

}
function myFunc(?MyObject $myObj)
{
    echo "hello world";
}
// this is allowed
myFunc(null); // hello world
myFunc(); // Fatal error: Uncaught ArgumentCountError: Too few arguments to function myFunc()

function sayHi($message = 'world') {
    echo "Hello $message";
}
sayHi();