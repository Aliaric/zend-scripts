<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 19/06/2018
 * Time: 17:30
 */

// In other words, nowdocs are not evaluated for special characters and
// variables.
echo <<<HEREDOC
  This is a heredoc string, note:
  1) the capitalization of the tag
  2) the tag name follows variable naming rules
  3) where the closing tag is
HEREDOC;
echo PHP_EOL;
$world = 'world';
echo <<<'TEXT'
hello $world
TEXT;


