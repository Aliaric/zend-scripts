<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 04/07/2018
 * Time: 17:11
 */

function A() {
    // The exception thrown in C will bubble up to A
    // because it is not handled in C or B
    try {
        B();
    } catch (Exception $e) {
        echo "Caught exception in " . __METHOD__ . PHP_EOL;
    }
}
function B() {
    // we're not catching exceptions in B
    C();
}
function C() {
    // we do not catch the exception where it is thrown
    throw new Exception('Bubble');
}
A();
/*
Outputs:
  Caught exception in A and the program ends successfully
*/


class ParentException extends Exception {}
class ChildException extends ParentException {}
try {
    // some code
    throw new ChildException('My Message');
} catch (ParentException $e) {
    // matches this class because of inheritance
    echo "Parent Exception :" . $e->getMessage() . PHP_EOL;
} catch (ChildException $e) {
    // matches this class exactly
    echo "Child Exception :" . $e->getMessage() . PHP_EOL;
} catch (Exception $e) {
    // matches this class because of inheritance
    echo "Exception :" . $e->getMessage() . PHP_EOL;
}

class ValidationException extends Exception {

}
function myValidation() {
    if (empty($_POST)) {
        throw new ValidationException('No form fields entered');
    }
}

try {
    // assume that if there is validation problem this throws aValidationException
    myValidation();
} catch (ValidationException $e) {
    echo "Validation exception caught " . PHP_EOL; // Validation exception caught
    echo $e->getMessage(); // No form fields entered
} catch (Exception $e) {
    echo "General exception type caught" . PHP_EOL;
}

try {
    $a = 10/0; // Warning: Division by zero
    echo $a;
} catch (Exception $e) {
    echo 'You cannot divide by ZERO!!' . PHP_EOL ;
}
