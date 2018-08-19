<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 13:13
 */


function myFunc() {
    foreach(func_get_args() as $arg => $value) {
        echo "$arg is $value" . PHP_EOL;
    }
}
myFunc('variable', 3, 'parameters');
/*
0 is variable
1 is 3
2 is parameters
*/

function myFunc2($data) {
    $data = 'Changed';
    echo func_get_arg(0); // Changed
}