<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 25/06/2018
 * Time: 19:51
 */

$fruits = array(
  "d" =>"lemon",
  "a" =>"orange",
  "b" =>"banana",
  "c" =>"apple"
);
$fruitArrayObject = new ArrayObject($fruits);
$fruitArrayObject->ksort();
foreach ($fruitArrayObject as $key => $val) {
    echo "$key = $val\n";
}
var_dump($fruitArrayObject);
/*
 * Flag
ArrayObject::STD_PROP_LIST Properties of the object have their normal functionality when accessed as a list (var_dump,
foreach, etc.).
ArrayObject::ARRAY_AS_PROPS Entries can be accessed as properties (read and
write).21
 */

// Array of available fruits
$fruits = array(
  "lemons" => 1,
  "oranges" => 4,
  "bananas" => 5,
  "apples" => 10
);
$fruitsArrayObject = new ArrayObject($fruits);
// Try to use array key as property
var_dump($fruitsArrayObject->lemons); // NULL
// Set the flag so that the array keys can be used as properties of the
// ArrayObject
$fruitsArrayObject->setFlags(ArrayObject::ARRAY_AS_PROPS);
var_dump($fruitsArrayObject->lemons); // 1