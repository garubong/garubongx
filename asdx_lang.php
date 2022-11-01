<?php 
print_r(dir("."));
$f = scandir(".");
print_r($f);

$myfile = fopen("index.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.php"));

print_r($myfile);
fclose($myfile);
?>
