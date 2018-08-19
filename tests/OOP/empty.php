<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 14:07
 */

class A
{
    public $name = '0';
    private $surname = '0';
    public function __isset($property)
    {
        return true;
    }
}
$a = new A;
$empty = empty($a->name); // True
$set = isset($a->surname); // True
if ($empty === $set) {
    echo "Yes"; // Yes
} else {
    echo "No";
}
