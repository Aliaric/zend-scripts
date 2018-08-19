<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 06/07/2018
 * Time: 19:19
 */

curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_exec($ch);
curl_close($ch);
