<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 15:45
 */

declare(strict_types=1);
function multiply(float $a, float $b): int {
    return $a * $b;
}
$six = multiply(2, 3);
echo gettype($six); // INT/NO!!!!
// Fatal error: Uncaught TypeError: Return value of multiply() must be of the type integer