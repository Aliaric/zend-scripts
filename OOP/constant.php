<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 10/07/2018
 * Time: 13:04
 */

const ONE = 1;
class foo {
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = 'The value of THREE is '.self::THREE;
}
echo foo::SENTENCE . "\n"; // The value of THREE is 3

class foo2 {
    public $bar = <<<'EOT'
bar
line1
line2
EOT;
    public function printbar(){
        echo $this->bar;
    }
}
$myobj = new foo2;
$myobj->printbar();
/*
 bar
line1
line2
 */