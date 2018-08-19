<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 13:51
 */

// Return type declaration.

// You can't specify strict mode for just one of the return or argument type
// declarations. if you specify strict mode, it will affect both.
function getFullName(string $firstName, string $lastName): string {
    return 123;
}
$name = getFullName('Mary', 'Moon');
echo gettype($name) . PHP_EOL;  // string


// trying to specify that it will return null will result in a fatal error.
function sayHello(): void {
    echo "Hello World" . PHP_EOL;
}
// Hello World
sayHello();

// Return by Reference
//The function itself must return a variable. If you try to return, for example,
// a numeric literal like 1, a runtime error will be generated.
function &getValue($a) {
    return $a;
}
getValue(1);
$myValue = &getValue(); // Fatal error: Uncaught ArgumentCountError: Too few arguments to function getValue()

fucntion av(&$b = 123) {
    echo $b;
}
a();