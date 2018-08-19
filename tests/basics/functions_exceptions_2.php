<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 15:33
 */

function A() {
    try {
        b();
    } catch (Exception $e) {
        echo "Exception caught in " . __CLASS__;
    }
}
function B() {
    echo 5 / "five";
}
try {
    A();
} catch (Error $e) {
    echo "Error caught in global scope: " . $e->getMessage();
}

// None of the above
// Warning: A non-numeric value
// Warning: Division by zero
// INF