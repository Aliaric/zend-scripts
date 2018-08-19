<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 16:14
 */

//Parse error: syntax error, unexpected 'Hello' (T_STRING), expecting '('
// Function name is a problem. Its anonymous function
(function Hello() {
    echo "Hello World!";
})();