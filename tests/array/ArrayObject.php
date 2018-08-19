<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 20:13
 */

$fruits = array(
  "lemons" => 1,
  "oranges" => 4,
  "bananas" => 5,
  "apples" => 10
);
$fruitsArrayObject = new ArrayObject($fruits);
$fruitsArrayObject->setFlags(ArrayObject::ARRAY_AS_PROPS);
// Try to use array key as property
var_dump($fruitsArrayObject->lemons); // 1