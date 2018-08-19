<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 12:48
 */

class Foo
{
    // Static properties are declared with the static keyword\
    public static  $a = 123;
    private static $message = 'Hello World';
    public function __construct() {
        // Static properties can be accessed with the scope resolution operator.
        echo self::$message;
    } }
    function getA() {
        return $this->a;
    }
$foo = new Foo;     // Hello World
echo Foo::$message; // PHP Fatal error: Cannot access private property Foo::$message