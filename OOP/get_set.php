<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 15:45
 */

class BankBalance {
    private $balance;
    public function __get($propertyName) {
        // echo "No property " . $propertyName;
        return "No value " . $propertyName;
    }
    public function __set($propertyName, $value) {
        echo "Cannot set $propertyName to $value" . PHP_EOL;
    }
}
$myAccount = new BankBalance();
$myAccount->balance = 100; // Cannot set balance to 100

echo $myAccount->nonExistingProperty5; // No value