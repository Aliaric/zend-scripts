<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 18/06/2018
 * Time: 11:43
 */

namespace Foo;
const AVOCADO = 6.02214086;
// using define() will generate a warning
define(MOLE, 'hill');
namespace Bar;
echo \Foo\AVOCADO;

echo \Foo\MOLE; // referencing the constant we tried to define() results in a fatal error
