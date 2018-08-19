<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 30/07/2018
 * Time: 22:00
 */

class Number {
    private $v;
    private static $sv = 10;
    public function __construct($v)
    {
        $this->v = $v;
    }
    public function mul() {
        return static function ($x) {
            return isset ($this) ? $this->v *$x: self::$sv*$x;
        };

    }


}

$one = new Number(1);
$two = new Number(2);
$double = $two->mul();
$x = Closure::bind($double, null, "Number");
echo $double(5); // 5