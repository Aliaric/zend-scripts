<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 19:01
 */

$arr = array("foo",
  "bar",
  "baz");
for ($i = 0; $i < count($arr); $i++) {
    $item = $arr[$i];
    var_dump($item);

}
echo "<pre>";
print_r($item); // baz
echo "</pre>";
