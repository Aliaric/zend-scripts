<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 16/05/2018
 * Time: 15:31
 */

class Dog
{
    static $hungry = 'hell yeah.';
    private $lastLogin;  // won't run
    function __construct()
    {
        $this->lastLogin = time();
    }

    static function eat($food)
    {
        if($food == 'cookie')
        {
            self::$hungry = "not so much.\n";
        }
        else
        {
            echo 'barf, I only like cookies!';
        }
    }
}

class Animal extends Dog {

}
Dog::eat('cookie');
echo Dog::$hungry; // not so much
echo PHP_EOL;
Animal::eat("not cooloe"); // barf..
echo PHP_EOL;

class MethodExample
{
    protected function a() {
        $this->b();

    }
    private function b() {
    }
    private $name;
    // explicitly specified visibility
    public function setName($name) {
        $this->name = $name;
    }
    // public visibility by default
    function getName($name) {
        return $this->name;
    }
}

class MyClass
{
    // Static functions are declared with the static keyword
    public static function sayHello() {
        echo "Hello World" . PHP_EOL;
    }
    public function someFunction() {
        // self refers to "this class", like $this refers to an object
        self::sayHello();
    } }
// Static functions can be accessed with the scope resolution operator.
MyClass::sayHello(); // Hello World
$object = new MyClass();
$object->someFunction(); // Hello World