<?php

$file = "example.txt";

if ($handle = fopen($file, 'r')) {

    //echo $content = fread($handle, 10); // length in bytes - each byte = 1 char
    echo $wholeContent = fread($handle, filesize($file));

    fclose($handle);
} else {
    echo "The App was not able to write on the file";
}