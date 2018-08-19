<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 27/07/2018
 * Time: 13:12
 */

class Base {
    protected static function whoami() {
        echo "Base";
    }
    public static function whoaeyou() {
        static::whoami();
    }
}

class A extends Base {
    public static function test() {
        Base::whoaeyou(); // Base
        self::whoaeyou(); // B
        parent::whoaeyou(); // B(?)
        A::whoaeyou(); // A
        static::whoaeyou();
    }
    public static function whoami(){
        echo "A";
    }
}

class B extends A {
    public static function whoami() {
        echo "B";
    }
}

B::test(); // BaseBBAB