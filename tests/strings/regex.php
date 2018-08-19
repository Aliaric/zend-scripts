<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 21/06/2018
 * Time: 16:23
 */

$subject = "Knock over christmas tree stare at kittens@catsaregreat.com the wall, play with food and get confused by dust or going to catch siamese@catsaregreat.com the red dot today going to catch the red dot today.";
//$pattern = "/\b[a-z]+@[a-z.]+\b/"; Yes
//$pattern = "/\b[a-z]+@[a-z]+.com\b/"; Yes
$pattern = "/#(\S*)@(\w*).(\S*)#/"; //You can’t; this won’t match anything in the string
$matches = [];
if (preg_match($pattern, $subject, $matches)) {
    var_dump($matches);
}

echo substr("abcdefgh12345678");
echo PHP_EOL;

$text = <<<EOT
The big bang bonger under tjhe bung.
EOT;

preg_match_all('@b.n?g@', $text,$matches);
var_dump($matches);

$str = "The cat sat on the roof of their house.";
$matches = preg_split("/(the)/i",$str, -1, PREG_SPLIT_DELIM_CAPTURE);
var_dump($matches); // 7 splits