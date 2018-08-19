<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 03/07/2018
 * Time: 13:20
 */

function callback($notification_code,
  $severity,
  $message,
  $message_code,
  $bytes_transferred,
  $bytes_max)
{
    if ($notification_code == STREAM_NOTIFY_FILE_SIZE_IS) {
        if ($bytes_max > 1024) {
            die("Download too big!");
        } }
}
$context = stream_context_create();
stream_context_set_params($context,
  ["notification" => "callback"]);
$handle = fopen('https://img-9gag-fun.9cache.com/photo/aeMdeGb_460sv.mp4', 'r', false, $context);
fpassthru($handle);