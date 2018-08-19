<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 15:10
 */

class SetMissing {
    public function __set($name, $value) {
        var_dump($name);
        var_dump($value);
        $this->$name = filter_var($value, FILTER_SANITIZE_STRING);
    }
}
$obj = new SetMissing();
$obj->example = "<strong>hello</strong>";
echo $obj->example . PHP_EOL; // hello ($name), filtered
$obj->example= "<strong>hello</strong>";
echo $obj->example; // <strong>hello</strong> ($value), non filtered