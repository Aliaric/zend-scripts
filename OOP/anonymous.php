<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 26/06/2018
 * Time: 14:42
 */

$object = new class('argument', 'non argument') {
    public function __construct(string $message, bool $msg2) {
        echo $message, " ", $msg2;
    }
};
