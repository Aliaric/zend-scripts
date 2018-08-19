<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 16:45
 */

namespace A;
function Hello() { echo __NAMESPACE__; }
namespace B;
function Hello() { echo __NAMESPACE__; }
namespace C;
\B\Hello(); // B