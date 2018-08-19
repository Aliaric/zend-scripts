<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 16/05/2018
 * Time: 17:13
 */

class Example
{
    private $_name;

    public function __construct($name)
    {
        $this->_name = $name;
    }
    function __destruct()
    {
        echo "Destructing object '$this->_name'." . PHP_EOL;
    }
}

$objectOne = new Example('Object one');
$objectTwo = new Example('Object two');
$objectFour = new Example("Obj 4");
$objectTwo = new Example('Object three'); // Destructing object 'Object two'.

unset($objectOne); // Destructing object 'Object one'.
echo 'Script still running.' . PHP_EOL;