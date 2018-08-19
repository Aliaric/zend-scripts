<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 13:23
 */

class A {
    public function __wakeup() {
        echo "Good morning";
    } };
class B {}
$a = new A();
$stored = serialize($a);
var_dump($stored); // string(12) "O:1:"A":0:{}"
unset($a);
// this works because the class name is allowed
$a = unserialize($stored, ['allowed_classes' => [A::class]]); // Good morning
echo PHP_EOL;
// this creates __PHP_Incomplete_Class because the class doesn't match
$b = unserialize($stored, ['allowed_classes' => [B::class]]); // nothing
echo PHP_EOL;

// this creates __PHP_Incomplete_Class because no classes are allowed
$c = unserialize($stored, ['allowed_classes' => false]); // nothing
echo PHP_EOL;

// this works because all classes are allowed
$d = unserialize($stored, ['allowed_classes' => true]); // Good morning
echo PHP_EOL;

// this generates a warning because the parameter type is incorrect
$e = unserialize($stored, ['allowed_classes' => 'Not boolean or array']); // warning
