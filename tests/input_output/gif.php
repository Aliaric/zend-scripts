<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 03/07/2018
 * Time: 13:31
 */

$url = 'http://www.reactiongifs.com/r/i-guess.gif';
file_put_contents('earth.gif', file_get_contents($url));
if (!rename('earth.gif', 'earth.jpeg')) {
    throw new RuntimeException('Could not rename the file.');
}
$finfo = new finfo();
// var_dump($finfo);
echo $finfo->file('earth.jpeg') . PHP_EOL;
// GIF image data, version 89a, 480 x 282