<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 16:33
 */

function complicated($compulsory, ...$extras) {
    echo "I have " . func_get_args() . " arguments";
}
complicated(1,2,3,4); // Should produce a notice error.

function complicated2($compulsory, ...$extras, $animal) {
    // I want to reference the variable with the value "cat"
}
complicated2(1,2,3,"cat"); // this produces an error