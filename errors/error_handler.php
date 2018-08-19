<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 04/07/2018
 * Time: 17:03
 */

function myHandler(int $errNo, string $errMsg, string $file, int $line) {
    echo "Error #[$errNo] occurred in [$file] at line [$line]: [$errMsg]";
}
set_error_handler('myHandler');
try {
    // This does not throw an Erro
    5 / 0;
} catch ( Throwable $e ) {
    echo 'Caught error : ' . $e->getMessage();
}
/*
  Error #[2] occurred in [/in/Xa0Td] at line [11]: [Division by zero]
*/