<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 12:49
 */
$value = 11;
switch ($value) {
    case '10':
        // statements to execute
        break;
    case '20':
        // statements to execute
        break;
    case '30':
        // statements to execute
        break;
    default:
        // statements to execute
        break;
}

$x = 0;

while($x <= 5) {
    $x++;
    echo "The number is: $x" . PHP_EOL;

}
echo "\xA";
$i = 0;
do {
    $i++;
    echo $i . PHP_EOL;
} while ($i <= 5);