<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 20/06/2018
 * Time: 13:59
 */

echo str_replace('foo', 'bar', 'Delicious food'); // Delicious bard


$string = "I like black hot coffee";
$search = ['black', 'coffee'];
$replace = ['green', 'tea'];
echo str_replace($search, $replace, $string); // I like green hot tea

$address = "09479 Huopainenkylä, Pöhjois-Karjala";
$address = strtr($address, "äåö", "aao");
echo $address; // 09479 Huopainenkyloa, Pohjois-Karjala