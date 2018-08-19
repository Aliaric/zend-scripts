<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 15:32
 */

function A() {
    try {
        b();
    } catch (Exception $e) {
        echo "Exception caught in " . __CLASS__;
    }
}
function B() {
    C();
}
try {
    A();
} catch (Error $e) {
    echo "Error caught in global scope: " . $e->getMessage();
}

// Error caught in global scope: Call to undefined function C()