<?php 
print_r(dir("."));
$f = scandir(".");
print_r($f);

$myfile = fopen("index.php", "r") or die("Unable to open file!");

echo htmlspecialchars($myfile);
fclose($myfile);
?>
