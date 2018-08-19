<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 02/07/2018
 * Time: 23:18
 */

$filename = 'test.csv';
$dataString = '1,2,3,4,5';
file_put_contents($filename, $dataString);
$handle = fopen($filename, 'r');
$myData = fgetcsv($handle);
echo gettype($myData); // array
echo count($myData); // 5