<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 24/07/2018
 * Time: 00:54
 */

function increment (&$val) {
    return $val + 1;
}
$a = 1;

echo increment($a); // 2
echo increment($a); // 2