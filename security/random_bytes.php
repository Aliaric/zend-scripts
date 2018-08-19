<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 29/06/2018
 * Time: 12:32
 */

// get a string that contains 8 random bytes
$randomBytes = random_bytes(8);
$printableVersion = bin2hex($randomBytes);
echo $printableVersion; // d7e263202be1b99b