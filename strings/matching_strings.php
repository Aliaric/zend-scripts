<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 20/06/2018
 * Time: 13:03
 */

$a = "AHP";
$b = "developer";
if ($a > $b) {
    echo "$a > $b";
} else {
    echo "$a < $b";
}
// developer comes before PHP in the alphabet
// but this script outputs
// PHP < developer
echo "\n";

$a = "12 o'clock";
$b = 12.00;
if ($a == $b) {
    echo "The mouse ran up the clock" . PHP_EOL;
}


$a = "PHP";
$b = "developer";
$comparison = strcmp($a, $b);
echo $comparison . PHP_EOL; // -20 | developer2 > ahp
$caseInsensitive = strcasecmp($a, $b);
echo $caseInsensitive . PHP_EOL; // 12 | PHP < developer2
echo ($a <=> $b);

echo substr("abcdefgh12345678");