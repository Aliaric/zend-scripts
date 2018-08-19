<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 24/07/2018
 * Time: 01:04
 */

class Number {
    private $v = 0;
    public function __construct($v)
    {
        $this->v = $v;
    }
    public function mul() {
        return function ($x) {
            return $this->v *$x;
        };

    }


}

$one = new Number(1);
$two = new Number(2);
$double = $two->mul()->bindTo($one);
echo $double(5); // 5

echo PHP_EOL;
class A {
    public $a = 1;
    public function __construct($a)
    {
        $this->a = $a;
    }
    public function mul() {
        return function ($x) {
            echo 'fuck';
            return $this->a *$x;
        };
    }
}

$a = new A(2);
$a->mul=function ($x) {
    echo 'fuck';
    return $x*$x;
};

$m = $a->mul();
echo $m(3);