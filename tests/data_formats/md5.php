<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 05/07/2018
 * Time: 14:58
 */

namespace A {

    function md5($value)
    {
        return \md5($value . ' Extra saltiness');
    }

    echo strlen(md5('Hi', true)); // 32
}


namespace b {
    echo PHP_EOL;
    echo strlen(md5(rand(), true)); // 16
    echo PHP_EOL;
    echo strlen(md5(rand(). true)); // 32
}
