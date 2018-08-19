<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 02/07/2018
 * Time: 22:08
 */

$dateTime = new DateTime();
//Fatal error: Uncaught Exception: DateInterval::__construct(): Unknown or bad format
$interval = new DateInterval('P1Y2M3D4H5M');
//$interval = new DateInterval('P1Y2DT4H5M'); - correct one


$dateTime->add($interval);
echo $dateTime->format(DateTime::COOKIE);



