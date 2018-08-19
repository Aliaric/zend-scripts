<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 15:41
 */

$a = "apples" <=> "bananas";
var_dump ($a);
$b = $a ?? $c ?? 10;
echo $b . PHP_EOL;

echo (10 <=> 10 << 1) . PHP_EOL;

echo "Apples"<=>"bananas" ? 'foo' : 'bar';