<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 17:43
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
$empty = empty($a->name);
$set = isset($a->surname);
if ($empty === $set) {
    echo "Yes"; // Yes
} else {
    echo "No";
}