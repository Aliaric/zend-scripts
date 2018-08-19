<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 20/06/2018
 * Time: 14:43
 */

$subject = "I can haz Cheeseburgers";
$pattern = "/I can haz (Cheeseburger)?/";
$pattern2 = "/I can haz (?:Cheeseburger)?/";
$matches = [];
preg_match($pattern2, $subject, $matches);
var_dump($matches[0]);
var_dump($matches); // $pattern2 - without "Cheesburger" in matches[] array

$subject_html = "Some <strong>html</strong> text";
$pattern_html = "/<.*>/";
$pattern_html2 = "/<.*?>/";  // // string(8) "<strong>"
$matches = [];
preg_match($pattern_html, $subject_html, $matches);
var_dump($matches[0]);  // string(21) "<strong>html</strong>"

$subject = "Some <strong>html</strong> text";
$pattern = "/<.*?>/";
$matches = [];
preg_match_all($pattern, $subject, $matches);
var_dump($matches);

/*
array(1) {


[0] =>
        array(2) {
    [0] => string(8) "<strong>"
    [1] => string(9) "</strong>"
        }
    }
*/

$subject = "test@example.com";
$pattern = "/^(?<username>\w+)@(?<domain>\w+).(?<tld>\w+)/";
$matches = [];
if (preg_match($pattern, $subject, $matches)) {
    var_dump($matches);
}

//array(7) {
//}
//[0] => string(16) "test@example.com"
//'username' => string(4) "test"
//[1] => string(4) "test"
//'domain' => string(7) "example"
//[2] => string(7) "example"
//'tld' => string(3) "com"
//[3] => string(3) "com"
//}