<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 13:22
 */

function parameterTypeExample($required, $optional = null,
  ...$variadicParams) {
    printf('Required: %d; Optional: %d; number of variadic parameters:
    %d'."\n",
      $required, $optional, count($variadicParams));
}
parameterTypeExample(1);
parameterTypeExample(1, 2);
parameterTypeExample(1, 2, 3);
parameterTypeExample(1, 2, 3, 4);
parameterTypeExample(1, 2, 3, 4, 5);
//This outputs:
//$req: 1; $opt: 0; number of params: 0
//$req: 1; $opt: 2; number of params: 0
//$req: 1; $opt: 2; number of params: 1
//$req: 1; $opt: 2; number of params: 2
//$req: 1; $opt: 2; number of params: 3