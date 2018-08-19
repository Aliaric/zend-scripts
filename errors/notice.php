<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 04/07/2018
 * Time: 16:53
 */

try {
    // generates a notice error (not caught)
    echo $thisVariableIsNotSet;
    // this would be a fatal error (is caught)
    badFunction();
} catch (Error $e) {
    echo "Error caught: " . $e->getMessage(); // Error caught: Call to undefined function badFunction()

}