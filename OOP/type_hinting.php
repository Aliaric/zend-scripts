<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 15:20
 */
class PaymentProvider {
    public $messageParameters = 123;
    public function contactGateway() {
        $this->messageParameters;
}
}
function printArray(array $arr) {
    echo "<pre>" . print_r($arr,true) . "</pre>";
}
// The parameter to the function must be a class that implements the PaymentProvider interface
function sendNotificationToPaymentProvider(PaymentProvider $paymentProvider)
{
    $paymentProvider->contactGateway($messageParameters);
}
function sayHello(string $name)
{
    echo "Hello " . $name;
}

function nullExample(null $msg = null) { // function nullExample(null $msg = null) {

    echo $msg; }

class A {}
class B extends A {}
class C extends B {}
function foo(A $object) {}
$testObj = new C;
foo($testObj);