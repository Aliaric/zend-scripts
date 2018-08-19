<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 03/07/2018
 * Time: 13:23
 */

file_put_contents('data.csv', '1,2,3,4,5');
$handle = fopen('data.csv', 'c+');
$data = fgetcsv($handle, 2);
var_dump($data);
fclose($handle);


file_put_contents('test.csv', '1,2,3,4,5');
$handle = fopen('test.csv', 'c');
fputcsv($handle, ['6', '7', '8']);
fclose($handle);
echo file_get_contents('test.csv');
// 6, 7, 8
// 4, 5