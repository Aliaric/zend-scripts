<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 14:37
 */

abstract class Paintings
{
    abstract protected function girlDescendingStairs();
    protected function persistenceOfMemory() {
        echo " I have an implementation so this is not an abstract method " . PHP_EOL;
    }
    public function __construct() {
        echo "I cannot be constructed!" . PHP_EOL;
    }
}

class Foo extends Paintings {
    public function girlDescendingStairs() { echo "Whee!"; }
    public function heat(){
        $this->persistenceOfMemory();
    }
}
$foo = new Foo;  // I cannot be constructed!
$foo->girlDescendingStairs();  // Whee!
//$foo->persistenceOfMemory(); //Fatal error: Uncaught Error:
// Call to protected method Paintings::persistenceOfMemory()