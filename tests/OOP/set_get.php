<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 10/07/2018
 * Time: 12:24
 */

Class Registry {
    private $vars = array();
    public function __set($key, $val) {
        $this->vars($key) = $val;
    }
    public function __get($key) {
        return $this->vars($key);
    }
}
$registry = new Registry;
$registry->foo = "foo";
echo $registry->foo;
