<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 13:14
 */

$emotion = "loves";
$theBeeb = function($name) use ($emotion) {
    echo "$name $emotion Justin" . PHP_EOL; // Ron loves Justin
};
$emotion = "adores";
$theBeeb("Ron");
var_dump($emotion);

function x ($x1 = $emotion) {

}