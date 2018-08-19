<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 02/08/2018
 * Time: 22:04
 */

function fibonacci (&$x1 = 0, &$x2 =1) {
//    var_dump($x1);
    $result = $x1 + $x2;
//    var_dump(    $x1);
    echo PHP_EOL;
    echo "$x1 + $x2 = $result\n";
echo PHP_EOL;
    $x1 = $x2;
    $x2 = $result;
//    $result =
//    return $result;
}
$a = 0;
$b =    1;
for ($i = 0; $i < 10; $i++) {
    echo fibonacci($a,$b). ',';
}