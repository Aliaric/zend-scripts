<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 17:17
 */

$name = 'Bob';
$a = 'Hello $name\n';
$b = "Hello $name\n";
echo $a . PHP_EOL;       // Hello $name\n
echo $b . PHP_EOL;       // Hello Bob

$catfood = "Cheeseburgers";
echo 'I can haz $catfood' . PHP_EOL; // I can haz $catfood
echo 'I can haz ' . $catfood . PHP_EOL; // I can haz Cheeseburgers?
echo "I can haz $catfood?" . PHP_EOL; // I can haz Cheeseburgers?

$dogfood = ['Pellets'];
$catfood = new stdClass();
$catfood->favorite = "Cheeseburger";
echo "$dogfood[0]" . PHP_EOL;             // Pellets
echo "$catfood->favorite" . PHP_EOL;      // Cheeseburger

$burger = "Cheeseburger";
echo "I can haz {$burger}" . PHP_EOL; // I can haz Cheeseburger
echo "I can haz ${burger}" . PHP_EOL; // I can haz Cheeseburger
echo "I can haz $burgers" . PHP_EOL; // no variable $burgers
echo "I can haz {$burger}s" . PHP_EOL; // I can haz Cheeseburgers
echo "I can haz { $burger }" . PHP_EOL; // I can haz { Cheeseburger }
echo "\n";

$catfood = new stdClass();
$catfood->name = "Cheeseburgers";
$cat = new stdClass();
$cat->canhaz = [$catfood]; // add $catfood object
var_dump($cat);
//echo "$cat->canhaz[0]->name"; // array to string conversion
echo "{$cat->canhaz[0]->name}" . PHP_EOL; // Cheeseburgers
echo "\n" . PHP_EOL;

echo "\u{1F418}";