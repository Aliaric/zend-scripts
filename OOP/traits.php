<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 21:51
 */

trait Singleton
{
    private static $instance;
    public static function getInstance() {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}
class UsingTraitExample
{
    use Singleton;
}
$object = UsingTraitExample::getInstance();
var_dump($object instanceof UsingTraitExample); // true

// Class members > trait methods > inherited methods

// PHP will generate a fatal error if two traits attempt to insert a method
// with the same name unless you explicitly resolve the conflict.

trait Dog {
    public function makeNoise() {
        echo "Woof" . PHP_EOL;
    }
    public function wantWalkies() {
        echo "Yes please!" . PHP_EOL;
    } }
trait Cat {
    public function makeNoise() {
        echo "Purr"  . PHP_EOL;
    }
    public function wantWalkies() {
        echo "No thanks!" . PHP_EOL;
    } }
class DomesticPet
{
    use Dog, Cat {
        Cat::makeNoise insteadof Dog;
        Cat::wantWalkies as kittyWalk;
        Dog::wantWalkies insteadof Cat;
    } }
$obj = new DomesticPet();
$obj->makeNoise();   // Purr
$obj->wantWalkies(); // Yes please!
$obj->kittyWalk();   // No thanks!

trait Example {
    public function myFunction() {
        // do stuff
    } }
class VisbilityExample {
    use Example {
        myFunction as protected;
    }
}
$obj = new VisbilityExample();
//$obj->myFunction(); // PHP Fatal error:  Call to protected method

//class 1_Example_Class { // not valid
//
//}