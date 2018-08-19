<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/07/2018
 * Time: 16:10
 */

namespace MyFramework\DB;

class MyClass {
    static function myName() {
        return __METHOD__;
    }
    public function yourName() {
        return __METHOD__;
    }
}

print MyClass::myName();
echo PHP_EOL;
$a = new MyClass();
echo $a->yourName();
echo PHP_EOL;

class C {
    public $ello = 'ello';
    public $c;
    public $m;
    function __construct($y) {
        $this->c = static function ($f) {
        return $f() . 'ello';
    };
        $this->m = function() {
            return 'h';
        };
}
}

$x = new C('h');
$f = $x->c;
echo $f($x->m);