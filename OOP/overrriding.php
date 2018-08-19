<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 14:30
 */

class Employee
{
    public function __construct()
    {
        echo "Hello world!";
    }

    public function calculateWage(float $hourlyRate, int $numHoursWorked)
    {
        return $hourlyRate * $numHoursWorked;
    }
}
class Oops extends Employee {
    public function calculateWage(int $hourlyRate, int $numHoursWorked) {
        // Warning: Declaration of Oops::calculateWage(int $hourlyRate,
        // int $numHoursWorked) should be compatible with
        // Employee::calculateWage(float $hourlyRate, int $numHoursWorked)
        return $hourlyRate * $numHoursWorked;
    }
}

class ChildClass extends Employee
{
    public function __construct() {
        parent::__construct();
        // more constructor functions here
    }
}
$a = new ChildClass();