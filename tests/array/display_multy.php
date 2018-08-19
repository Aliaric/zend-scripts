<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 22:45
 */

$array = array(array(141,151,161), 2, 3, array(101, 202, 303));
function DisplayArray($array) {
    foreach ($array as $value) {
        if (is_array($value)) {
            DisplayArray($value);
        } else {
            echo $value. " ";
}
    }
}
DisplayArray($array); //141, 151,... etc
