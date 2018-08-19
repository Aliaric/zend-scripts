<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 02/07/2018
 * Time: 22:01
 */

$stack = new SplStack();
$stack->push(5);
$stack[1] = 4; // Fatal error: Uncaught OutOfRangeException: Offset invalid or out of range
echo $stack->pop();