<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 19:40
 */

$a = $b = explode(' ', 'a1 a2 a10 a11 a12 a20 a21');
shuffle($a);
shuffle($b);

natsort($a);
sort($b);
print_r($a);
print_r($b);

/*
 * Array (
    [5] => a1
    [2] => a2
    [0] => a10
    [4] => a11
    [6] => a12
    [3] => a20
    [1] => a21
) Array (
    [0] => a1
    [1] => a10
    [2] => a11
    [3] => a12
    [4] => a2
    [5] => a20
    [6] => a21
)
 */