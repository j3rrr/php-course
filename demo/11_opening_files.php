<?php

$file = "example.txt";

//Open file for 'w'riting
$handle = fopen($file, 'w');
fclose($handle);