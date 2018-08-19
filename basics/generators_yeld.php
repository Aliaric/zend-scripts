<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 21:42
 */

function generator2() {
    for ($i = 0; $i < 99; $i++) {
        yield $i; // Only in generators
    } }
foreach (generator2() as $value) {
    echo $value . " ";
}

// Calling yield without an argument causes it to yield a NULL value with an automatic increasing sequential key.
echo PHP_EOL;
function sowCrops() { return 'wheat'; }
function millWheat() { return 'flour'; }
function bake($flour) { return 'cupcake'; }
function generator() {
    $wheat = yield sowCrops();
    $flour = yield millWheat();
    return bake($flour);
};
$gen = generator();
foreach ($gen as $key => $value) {
    echo $key . ' => ' . $value . PHP_EOL;
}
echo $gen->getReturn();
/*
0 => wheat
1 => flour
cupcake
*/
echo PHP_EOL;

function generator3() {
    $a = [1,2,3];
    yield from $a; // 1, 2, 3
    yield from range(4,6); // 4, 5, 6
    yield from sevenAteNine(); // 7, 8, 9
}
function sevenAteNine() { // also generator
    for ($i=7; $i<10;$i++) {
        yield $i;
    } }
$gen = generator3();
foreach ($gen as $value) {
    echo $value . PHP_EOL;
}
