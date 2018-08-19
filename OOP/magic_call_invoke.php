<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 16:16
 */

class Politician {
    public function __call($method, $arguments) {
        echo __CLASS__ . ' has no ' . $method . ' method';
    } }
$jacob = new Politician();
$jacob->honesty();  // Politician has no honesty method

class Square
{
    public function __invoke($var) {
        return $var ** 2;
    } }
    echo PHP_EOL;
$callableObject = new Square;
echo $callableObject(10); // 100