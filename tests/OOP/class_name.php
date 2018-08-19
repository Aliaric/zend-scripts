<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 15:14
 */

 class Insurance
 {
     var $methods;
     function clsName()
 {
         echo get_class($this);
         $this->methods = (get_class_methods(get_class($this)));
         echo PHP_EOL;
         echo $this->methods[0];
 }
 }
 $cl = new Insurance();
 $cl->clsName(); //Insurance

echo PHP_EOL;
class Test {
    public function __call($name, $args){
        call_user_func_array(array('static', "test$name"), $args);
    }
    public function testS($l) {
        echo "$l,";
}
}

class Test2 extends Test {
    public function  testS($l)
    {
        echo "$l,$l,";
}
}
$test = new Test2();
$test->S('A');

echo PHP_EOL;

