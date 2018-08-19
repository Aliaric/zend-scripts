<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 14:25
 */

$lambda = function($a, $b) {
    echo $a + $b;
};
echo gettype($lambda) . PHP_EOL; // object
echo (int)is_callable($lambda) . PHP_EOL; // 1
echo get_class($lambda) . PHP_EOL; // Closure


$string = "Hello World!";
$closure = function() use ($string) {
    echo $string . PHP_EOL;
};
$closure(); // "Hello world"

$a = "some string, no reference";
// early binding (default)
$b = function() use ($a) {
    echo $a . PHP_EOL;
};
$a = "Hello World, no reference";
// some string
$b(); // "some string"

$c = "some string";
// late binding (reference)
$d = function() use (&$c) {
    echo $c . PHP_EOL;
};
$c = "Hello World, with reference";
$d(); // Hello World


class Animal {
    public function getClosure() {
        $boundVariable = 'Animal';
        return function() use ($boundVariable) {
            return $this->nature . ' ' . $boundVariable . PHP_EOL;
        };
    }
}
class Cat extends Animal {
    protected $nature = 'Awesome';
}

class Dog extends Animal {
    protected $nature = 'Friendly';
}
$cat = new Cat;
$closure = $cat->getClosure();
echo $closure(); // Awesome Animal
$closure = $closure->bindTo(new Dog);
echo $closure(); // Friendly Animal


(function() {
    echo 'Self-executing anonymous function';
    echo $definedInClosure = 'Variable set';
})();
var_dump(isset($definedInClosure));  // bool(false)