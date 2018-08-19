<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 15:35
 */

class A {
    public static function foo() {
        echo static::who();
    }
    public static function who() {
        return 'A';
    } }
class B extends A {
    public static function test() {
        A::foo(); // A
        parent::foo(); // C
        self::foo();// C
    } }
class C extends B {
    public static function who() {
        echo 'C'; }
}
C::test(); // ACC