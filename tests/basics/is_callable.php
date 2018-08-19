<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 12:58
 */

$a = function($a) {
    return is_callable($a);
};
$b = function($b) use ($a) {
    return $a($b);
};
echo $b($a) ? 'True' : 'False'; // True