<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 14:47
 */

$a = "foo";
$$a = "bar";
$a = "Hello world";
echo ${"foo"}; // bar