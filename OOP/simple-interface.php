<?php


namespace animal;

interface Animal
{
    public function eat($food);
}
interface Mammal
{
    public function giveBirth();
}
class insect {}
class Dog implements Animal, Mammal
{
    public $gender = 'male';

    function eat($food)
    {
        if($food == 'cookie')
        {
            return $this->hungry = 'not so much.';
        }
        else
        {
            echo 'barf, I only like cookies!';
        }
    }
    function giveBirth()
    {
        if($this->gender == 'male')
        {
            echo 'I can\'t, I am a boy :P';
        }
        else
        {
            echo 'I\'m not even pregnant yet.';
        }
    }
}

$dog = new Dog();
echo $dog->eat("cookie");

interface PaymentProvider extends Mammal
{
    public function showPaymentPage();
    public function contactGateway(array $messageParameters);
    public function notify(string $email);
}

 class PaymentSpecial extends PaymentProvider {
    protected function showPaymentPage() {

    }
}
