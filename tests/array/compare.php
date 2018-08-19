<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 14:02
 */

$arr1 = [1,2,3];
$arr2 = array(
  "1" => 2,
  0 => "1",
  2 => 3
);
$equal = $arr1 == $arr2 ? 'Equal' : 'Not Equal';
$identical = $arr1 === $arr2 ? 'Identical' : 'Not Identical';
echo "The arrays are [$equal] and [$identical]";  //The arrays are [Equal] and [Not Identical]
