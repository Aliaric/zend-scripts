<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 24/07/2018
 * Time: 11:36
 */

class Bar {
    private $a = 'b';
    public $c = "d";
}

$x = (array) new Bar;
var_dump($x);
echo array_key_exists('a', $x) ? "true" : 'false'; // "false" | " Bar a"]=> string(1) "b"
echo array_key_exists('c', $x) ? "true" : 'false';