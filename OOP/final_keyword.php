<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 14:21
 */
final class BaseClass {
    public function test() {
        echo "BaseClass::test() called\n";
    }

    // Here it doesn't matter if you specify the function as final or not
    final public function moreTesting() {
        echo "BaseClass::moreTesting() called\n";
    }
}

class MagicClass {
    final  function abc(){

    }
}
class Child2Class extends BaseClass {
    public function moreTesting() { // Fatal error: Cannot override final method BaseClass::moreTesting()
        echo "ChildClass::moreTesting() called\n";
    }
}
class ChildClass extends MagicClass {} // Fatal error: Class ChildClass may not inherit from final class (BaseClass)
echo "Script continues";