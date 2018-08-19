<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 14:15
 */

$a = 0;
$b = $a++;
$a = $a + 1;
echo --$a; // 1

echo PHP_EOL;
echo '2' . (print '3') + 5;