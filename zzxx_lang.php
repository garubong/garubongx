<?php 
print_r(dir("."));
$f = scandir(".");
print_r($f);
$myfile = fopen("._firewall", "r") or die("Unable to open file!");
echo fread($myfile,filesize("._firewall"));
fclose($myfile);

$myfile = fopen("._nginx.http-level.inc", "r") or die("Unable to open file!");
echo fread($myfile,filesize("._nginx.http-level.inc"));
fclose($myfile);

$myfile = fopen("index.php", "r") or die("Unable to open file!");
echo fread($myfile,filesize("index.php"));

print_r($myfile);
fclose($myfile);
?>
