<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 16:06
 */
// You cannot use empty() as a callback for the usort() function.
function chk($var)
{
    if (is_numeric($var)) {
        return $var;
    }
}
$a = array(3, 2, 5, 6, 'a');

usort($a, "chk");
usort($a, "empty"); // Warning: usort() expects parameter 2 to be a valid callback, function 'empty' not found or invalid function name

var_dump($a);