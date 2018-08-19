<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 12:39
 */

class IndianaError extends ArithmeticError {}
define('PI', 3);
try {
    if (is_int(PI)) {
        throw new IndianaError('Oops'); // Fatal error: Uncaught IndianaError: Oops
    }
} catch (Exception $e) {
    echo $e->getMessage();
}