<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 28/06/2018
 * Time: 13:22
 */

$star = new StdClass;
$twin = clone($star);
$star->name = "Castor";
$twin->name = "Pollux";
echo $twin->name;
echo PHP_EOL;
echo $star->name; // must be Castor
