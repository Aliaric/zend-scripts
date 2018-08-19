<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 16:30
 */

declare(strict_types=1);
function multiply(float $a, float $b): float {
    return (float)$a * (double)$b;
}
$six = multiply(2, 3);
echo gettype($six); // double, because probably there are no float gettype output
// double == float