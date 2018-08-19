<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 17:39
 */

trait Dog {
    private $a;
    public function makeNoise() {
        echo "Woof";
    }
    public function wantWalkies() {
        echo "Yes please!";
    }
}
trait Cat {
    public function makeNoise() {
        echo "Purr";
    }
    public function wantWalkies() {
        echo "No thanks!";
    }
}
trait MyTrait {
    private $abc = 1;
    public function increment() {
        $this->abc++;
    }
    public function getValue() {
        return $this->abc;
    }
}

class MyClass {
    use MyTrait;
    public function  incrementBy2()
    {
        $this->increment();
        $this->abc++;
    }
}
$c = new MyClass();
$c->incrementBy2();
var_dump($c->getValue()); //3

interface WTF {};

// CANNOT
//trait hello implements WTF {
//
//}
class DomesticPet
{
    use Dog, Cat {
        Cat::makeNoise insteadof Dog;
        Cat::wantWalkies as kittyWalk;
        Dog::wantWalkies insteadof Cat;
    }
}
$obj = new DomesticPet();
$obj->kittyWalk(); // no thanks
