<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 20/06/2018
 * Time: 13:19
 */

$string = 'abcdef';
echo $string[0];    // a

echo substr("abcdef", 2) . PHP_EOL;    // cdef
echo substr("abcdef", -2) . PHP_EOL;   // ef

echo substr("abcdef", 0, 2) . PHP_EOL;    // ab
echo substr("abcdef", 0, -2) . PHP_EOL; // abcd

echo substr('abcdef', 1);     // bcdef
echo substr('abcdef', 1, 3);  // bcd
echo substr('abcdef', 0, 4);  // abcd
echo substr('abcdef', 0, 8);  // abcdef
echo substr('abcdef', -1, 1); // f
