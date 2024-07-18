<?php
$myfile=fopen("tic.txt","w")or die ("Unable to open file");
$txt="Adam Kowal\n";
fwrite($myfile, $txt);
$txt="Jane fonda";
fwrite($myfile,$txt);
for($i=1;$i<=10;$i++)
fwrite($myfile,$i."\n");
fclose($myfile);
?>

