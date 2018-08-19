<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 12:58
 */

function add(int $a, int $b): int { // Fatal error: Uncaught TypeError:
    // Return value of add() must be an instance of integer, integer returned
    return $a + $b;
}
echo add(5.7, -4.6);

echo PHP_EOL;
echo "1" +2 * "0x02";
echo PHP_EOL;
echo "22" + "0.2", 23.1;