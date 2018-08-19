<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 17:32
 */

$hello = "world";
echo $hello[0]; // w
echo $hello{1}; // o

$hello = "world";
$hello[10] = "*";
echo $hello; //  world     *