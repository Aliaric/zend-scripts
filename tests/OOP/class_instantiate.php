<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 14:24
 */

$foo = new ExampleClass();
echo $foo;
class ExampleClass {
    public function __toString()
    {
        return "Hello world";
        // TODO: Implement __toString() method.
    }
}
echo PHP_EOL;
class Test {
    public $var = 1;
}

function addMe(Test $t) {
    $t->var++;
}
$t = new Test();
addMe($t);
echo $t->var; // 2

echo PHP_EOL;

class C
{

    public $x = 1;

    function __construct()
    {
        ++$this->x;

    }
    function __invoke() {
    return ++$this->x;

    }
    function __toString()
    {
        return (string) --$this->x;
        // TODO: Implement __toString() method.
    }

}

$obj = new C;
echo $obj();
