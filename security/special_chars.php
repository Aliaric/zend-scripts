<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 28/06/2018
 * Time: 20:13
 */

$string = '© 1982 Sinclair Research Ltd.';
echo htmlentities($string); // &copy; 1982 Sinclair Research Ltd.
echo PHP_EOL;
echo htmlspecialchars($string); // © 1982 Sinclair Research Ltd.