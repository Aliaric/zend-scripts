<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 02/07/2018
 * Time: 23:10
 */

$handle = fopen('info.txt', 'r');
// Attach a filter to a stream
stream_filter_append($handle, 'string.rot13', STREAM_FILTER_ALL);

while (!feof($handle)) {
    echo fread($handle,1024);
}