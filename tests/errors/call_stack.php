<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 14:54
 */

$e = new Exception;
var_dump($e->getTraceAsString());

try {
    class MyException extends Exception{};
    try {
        throw new MyException;
    }
    catch (Exception $e) {
        echo "1:";
        throw $e;
    }
    catch (MyException $e) {
        echo "2:";
        throw $e;
    }
}
catch (Exception $e) {
    echo get_class($e);
}

