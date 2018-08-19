<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 22:01
 */

class SleepyHead {
    protected $name = "Dozy";
    public function __serialize() {
        $this->name = "Asleep";
    }
    public function __unserialize() {
        $this->name = "Rested";
    } }

    $a = new SleepyHead();
var_dump($a);
$b = serialize($a);
echo PHP_EOL;
var_dump($b);
$c = unserialize($c);
echo PHP_EOL;
var_dump($c); // false
$obj = unserialize(serialize($a));
var_dump($obj);