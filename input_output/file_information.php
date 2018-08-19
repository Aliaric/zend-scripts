<?php
/**
 * Created by PhpStorm.
 * User: dmitrij.rebrov
 * Date: 02/07/2018
 * Time: 23:25
 */

$finfo = finfo_open(FILEINFO_MIME_TYPE);
foreach (glob("*") as $filename) {
    echo finfo_file($finfo, $filename) . "\n";
}
finfo_close($finfo);


// finfo will return the mime type
$finfo = new finfo(FILEINFO_MIME, "/usr/share/misc/magic");
/* get mime-type for a specific file */
$filename = "/usr/local/something.txt";
echo $finfo->file($filename);
