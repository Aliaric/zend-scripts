<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 28/06/2018
 * Time: 13:32
 */

class World {
    public static function hello() {
        echo "Hello " . __CLASS__;
    } }
class Meek extends World {
    public function __call($method, $arguments) {
        echo "I have the world";
    }
}
Meek::hello(); // Hello World
echo PHP_EOL;
class A {
    protected  $x = array();
    public function &getX()
    {
        return $this->x;
    }
}

$a = new A();
array_push($a->getX(), 'one');
array_push($a->getX(), 'two');
echo count($a->getX());

