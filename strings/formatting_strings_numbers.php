<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 20/06/2018
 * Time: 14:24
 */

$minutes = 60;
$timeUnit = "an hour";
printf("There are %u minutes in %s.", $minutes, $timeUnit);

// Set locale to Dutch
setlocale(LC_ALL, 'nl_NL');
// Output: vrijdag 22 december 1978
echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));

$number = 1234.5678;
// 1,235
echo number_format($number) . PHP_EOL;
// 1,234.568
echo number_format($number, 3) . PHP_EOL;
// 1.234,57
echo number_format($number, 2, ',', '.') . PHP_EOL;

// Locale is British English
setlocale(LC_MONETARY, 'en_GB');
echo money_format('%.2n', "5000000.123"); // £5,000,000.12
// Locale is Denmark
setlocale(LC_MONETARY, 'da_DK');
echo money_format('%.2n', "5000000.123"); // kr 5.000.000,12