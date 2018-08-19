<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 24/07/2018
 * Time: 00:33
 */

$data = '$1a2';
echo strlen($data); // 4
echo PHP_EOL;
for ($i =0; $i < 1.02; $i += 0.17) {
    $a[$i] .= $i;
      }
var_dump($a);

echo count($a);
printf('%010.6f', 22); // 022.000000
echo PHP_EOL;
function counter ($start, &$stop) {
    echo 1 . PHP_EOL;
    var_dump($start);
    var_dump($stop);
    if ($stop > $start) {
        return;
    }
    counter($start--, ++$stop);
}

$start = 5;
$stop = 2;
counter($start,$stop);