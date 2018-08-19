<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 16/05/2018
 * Time: 17:55
 */

class Animal
{}
class Feeder
{
    public function feedAnimal(Animal $animal, $food)
    {
        $animal->eat($food);
    }
}
class Dog extends Animal
{
    public function eat($food)
    {
        if($food == 'cookie')
        {
            $this->hungry = 'not so much.';

        }
        else
        {
            echo 'barf, I only like cookies!';
        }
    }
}
$dog = new Dog();
$feeder = new Feeder();
$feeder->feedAnimal($dog, 'broccoli');