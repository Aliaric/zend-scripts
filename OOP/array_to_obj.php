<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 13:43
 */

$array = [
  'key' => 'value',
  'nested_array' => [
    'another_key' => 'different_value'
  ]
];
$object = (object)$array;
var_dump($object);