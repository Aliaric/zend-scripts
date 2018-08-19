<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 13:10
 */
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

try {
    // generates a notice error (not caught)
    a();
    echo $thisVariableIsNotSet;
} catch (Error $e) {
    echo "Error caught";
}