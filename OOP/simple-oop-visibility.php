<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 16/05/2018
 * Time: 17:18
 */

class Teeth
{
    public $_colour = 'white';

    public function stain()
    {
        $this->_colour = 'yellow';
    }
}
class Dog
{
    public $teeth;
    public $hungry;
    public function __construct()
    {
        $this->teeth = new Teeth();
    }
    public function eat($food)
    {
        if($food == 'cookie')
        {
            $this->hungry = 'not so much.';
            //Attempt to turn teeth green:
            $this->teeth->_colour = 'green';

        }
        else
        {
            echo 'barf, I only like cookies!';
        }
    }
}

class Husky extends Dog {

}
$dog = new Dog();
echo $dog->teeth->_colour;
echo PHP_EOL;
echo $dog->eat("cookie");
$t = new Teeth();
echo $t->stain();

class ParentClass
{
    public function sayHello() {
        echo __CLASS__;
    } }
class ChildClass extends ParentClass
{
    // nothing in this class
}
$kid = new ChildClass;
$kid->sayHello(); // ParentClass