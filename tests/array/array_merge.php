<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 24/07/2018
 * Time: 13:37
 */

$a = array_merge([1,2,3] + [4=>1,5,6]);
echo $a[2];
echo PHP_EOL;
$b = [1 => "Apple", 3=> "Cactus", 5=>'Elderflower'] +
  ['banana', 'Dragon fruit', 'Fig'];
echo count($b);