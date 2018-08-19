<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 16/05/2018
 * Time: 17:52
 */

class Dog
{
    const NUMBER_OF_LEGS = '4';

    public function __construct()
    {
        echo 'I have ' . self::NUMBER_OF_LEGS . ' legs, 
                and you can\'t take that away from me!';
    }
}
$dog = new Dog();