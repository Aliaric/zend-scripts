<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 24/07/2018
 * Time: 23:58
 */

$test ='/etc/conf.d/wireless';
$a = substr($test,strrpos($test,'/'));
var_dump($a);