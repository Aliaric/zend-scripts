<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 16/05/2018
 * Time: 18:42
 */

class Dog
{
    function __toString()
    {
        return 'I am Dog.';
    }
}
$dog = new Dog();
echo "Dog says: $dog";