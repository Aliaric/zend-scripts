<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 16/05/2018
 * Time: 18:34
 */

class Teeth
{
    public $colour = 'white';
}
class Dog
{
    public $teeth;

    public function __construct()
    {
        $this->teeth = new Teeth();
    }

    public function __clone()
    {
        $this->teeth = clone $this->teeth;
    }
}
$Lassie = new Dog();
$Snoopy = clone $Lassie;
$Snoopy->teeth->colour = 'green';
echo $Snoopy->teeth->colour . PHP_EOL; // green
echo $Lassie->teeth->colour . PHP_EOL; // white