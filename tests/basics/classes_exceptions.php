<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 15:37
 */

class MyException extends Exception {}
class ChildException extends MyException {}
try {
    throw new ChildException;
} catch (Exception $e) {
    echo "Caught Exception: " . get_class($e);
} catch (MyException $e) {
    echo "Caught MyException" . get_class($e);
}

// Caught Exception: ChildException