<?php
//Decode a single VRZ file

$filename = $argv[1];
$parts = explode(".", $filename);
$name = $parts[0];
$file = $name . '.pvr';
$zp = file_get_contents($filename, "r");
$pos = strpos($zp, ':');
$pvr = zlib_decode(substr($zp, $pos + 1));
file_put_contents($file, $pvr);


?>
