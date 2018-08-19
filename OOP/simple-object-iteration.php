<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 16/05/2018
 * Time: 18:47
 */

class ExampleParent
{
    protected $propertyOne = 'value1';
    public $propertyTwo = 'value2';
}
class Example extends ExampleParent
{

    private $propertyThree = 'value3';

    public function __construct()
    {
        echo "Internal iteration of Example:" . PHP_EOL;

        foreach($this as $property => $value)
        {
            echo "Property '$property' => '$value' " . PHP_EOL;
        }
        echo PHP_EOL;
    }
}
$example = new Example();

echo "External iteration of Example:" . PHP_EOL;
//var_dump($example);
foreach($example as $property => $value)
{
    echo "Property '$property' => '$value' " . PHP_EOL;
}
echo PHP_EOL;

$exampleParent = new ExampleParent();

echo "External iteration of ExampleParent:" . PHP_EOL;

foreach($exampleParent as $property => $value)
{
    echo "Property '$property' => '$value' " . PHP_EOL;
}