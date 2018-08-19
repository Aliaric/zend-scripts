<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 23:13
 */

function abc()
{
    return __FUNCTION__;
}
function xyz()
{
    return abc();
}
echo xyz(); // abc
