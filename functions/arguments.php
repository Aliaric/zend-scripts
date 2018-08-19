<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 13:02
 */
declare(strict_types=1);

function A(bool $a) {var_dump($a);}
A(true);
$c = 123;
// Fatal error: Uncaught TypeError: Argument 1 passed to A() must be aninstance of boolean, boolean given,

/*
$employee must be an object that is either:
an instance of the Employee class,
or is any child of a class that does

*/

class Employee {

}

interface PaymentProviderInterface {

}
function calculateWage(Employee $employee) {}
// $callback must be a callable
function performCalculation(callable $method) {}

function requestPayment(PaymentProviderInterface $paymentObject) {}

// Depends on "strict_types" option
function sayHello(string $name) {
    echo gettype($name);
}
sayHello(100); //fatal error

function sayHello2(string $name) {
    echo gettype($name);
}
sayHello2(100); // fatal error
/*
Fatal error: Uncaught TypeError: Argument 1 passed to sayHello() must be of
the type string, integer given,
*/