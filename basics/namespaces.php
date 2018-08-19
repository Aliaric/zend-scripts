<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 12:56
 */

namespace A {
    // this is in namespace A
}
namespace B {
    // this is in namespace B
}


namespace {
    // this is in the global namespace
}

namespace MyApp\Helpers {

    class Formatters
{
    public static function asCurrency($val) {
        return $val;
    }
 }
}

// Imports namespace

//use MyApp\Helpers\Formatters;
// this file is in a different namespace
namespace MyApp\Lib {

    // we must specify the full path to the namespace that the class is in
    echo \MyApp\Helpers\Formatters::asCurrency(10);
}