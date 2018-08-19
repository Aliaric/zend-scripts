<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 12:35
 */

$handler = function($errorNumber, $errorMessage, $file, $line) {
    echo "Error [$errorNumber] in [$file] at line [$line]:
     '[$errorMessage]'\r\n";
};
set_error_handler($handler);
try {
    echo $a; // Error [8] in [/Users/dmitrij.rebrov/Development/vanilla/tests/errors/error_handler.php] at line [15]:
   // '[Undefined variable: a]'
    session_start();
    echo session_id();
} catch (Throwable $e) {
    echo "Error caught!" . PHP_EOL;
}


$handler = function($errorNumber, $errorMessage, $file, $line) {
    echo "Error [$errorNumber] in [$file] at line [$line]: '[$errorMessage]'\
r\n"; };
set_error_handler($handler);
this_function_is_not_defined(); // a normal fatal error PHP message

set_error_handler(function($errorNumber, $errorMessage, $file, $line) {
    debug_print_backtrace();
});
trigger_error('Hello world', E_USER_WARNING); // Noting
// none of the above