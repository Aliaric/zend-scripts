<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 20:58
 */

class Dictatorship {
    private $wmd = 'Nuke';
    public $oil = 'Lots';
    // we are going to hide our wmd
    public function __debugInfo() {
        return [
          'oil' => $this->wmd
        ]; }
}
$country = new Dictatorship();
var_dump($country);
/*
object(Dictatorship)#1 (1) {
["oil"]=>
  string(4) "Lots"
}
*/

$start = 0;
class countMe {

    public function __construct($start)
    {
        $start++;
    }
}