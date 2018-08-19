<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 15:05
 */
//class ReflectionClass extends Mirror {}
class Mirror {
    private function showMeGorgeous($me) {
        echo $me;
    }
    public function hello($me) {
        echo $me;
    }
}
$refObj = new ReflectionClass('Mirror');
print_r($refObj->getMethods());
/*
  Array
(
    [0] => ReflectionMethod Object
        (
            [name] => showMeGorgeous
            [class] => Mirror
        )

    [1] => ReflectionMethod Object
        (
            [name] => hello
            [class] => Mirror
        )

)
  */


$refObj->hello("fuck!"); // Fatal error: Uncaught Error: Call to undefined method ReflectionClass::hello()