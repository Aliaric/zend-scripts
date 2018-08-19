<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 04/07/2018
 * Time: 19:11
 */

class MyException extends Exception {}
class AnotherException extends Exception {}
try {
    throw new AnotherException;
} catch (MyException | AnotherException $e) {
    echo "Caught : " . get_class($e) . PHP_EOL;
} finally {
    echo 123;
}
/*
Caught : AnotherException
*/