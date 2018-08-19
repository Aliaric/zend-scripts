<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 20/06/2018
 * Time: 13:00
 */

$waysToSayHello = [
  'emoji' => "\u{1F44B}",
  'latinchars' => "Hello",
  'accentedChars' => "ça va?"
];
foreach ($waysToSayHello as $method => $string) {
    echo "$method : encoding [" . mb_detect_encoding($string,
        'ISO-8859-1') . '] ' .
      'encoding [' . mb_detect_encoding($string, ['ASCII','UTF-8']) . '] ' . 'strlen [' . strlen($string) . '] ' .
      'mb_strlen [' . mb_strlen($string) . '] ' .
      'first character[' . $string[0] . ']';
    echo "\r\n";
}