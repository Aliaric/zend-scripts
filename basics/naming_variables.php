<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 10:57
 */

$a = 'foo';
$$a = 'bar'; // $a is 'foo', so variable $foo is set
echo $foo; // bar
echo "\n";

$b = 'moo';
$$b['bar'] = 'Murky code';
// this assert passes
assert($$b['bar'] === $moo['bar']);
var_dump ($moo);
/*
array(1) {
  ["bar"]=>
  string(10) "Murky code"
}
} */