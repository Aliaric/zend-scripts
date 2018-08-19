<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 24/07/2018
 * Time: 19:16
 */

abstract class Graphics {
    abstract function draw ($im, $col);
}

abstract class Point1 extends Graphics {
    public $x, $y;
    function __construct($x, $y)
    {
        $this->x=$x;
        $this->y=$y;
    }
    function draw($im, $col) {
        imagesetpixel($im, $this->x, $this->y,$col);
    }
}

class Point2 extends Point1{}

abstract class Point3 extends Point2{}

$a = new Point2(1,2);
//$b = new Point3(1,2); ERROR

echo PHP_EOL;

abstract class Base {
    protected function __construct()
    {
    }
    public static function create() {
        return new Item();
    }
    abstract function action();
}

class Item extends Base {
  public function action()
  {
    echo __CLASS__;   // TODO: Implement action() method.
  }
}

$item = Item::create();
$item->action();