<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 29/06/2018
 * Time: 16:39
 */

$strings = [
  'Next monday',
  'Yesterday',
  '', // now
  '2016-12-25',
  '25 December 2016',
  '-1 week',
  '+1 days' ];
foreach ($strings as $example) {
    $dateTime = new DateTime($example);
    echo $dateTime->format(DateTime::COOKIE) . PHP_EOL;
}

$dateTime = DateTime::createFromFormat('d-m-Y', '06-03-2013');
echo $dateTime->format(DateTime::COOKIE) . PHP_EOL;

$dateTime = new DateTime();
$dateTime->modify('+1 month');
echo $dateTime->format(DateTime::COOKIE) . PHP_EOL;

$now = new DateTime();
$christmas = new DateTime('25 december');
if ($now > $christmas) {
    $christmas = new DateTime('25 december next year');
}
$interval = $christmas->diff($now);
// 97 days until Christmas
echo  $interval->days . ' days until Christmas' . PHP_EOL;