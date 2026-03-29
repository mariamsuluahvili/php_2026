<?php 
$file="homeworkfiles/log.txt";
$fo=fopen($file,'a');
$content=date("d.m.y H:i:s");
$maincontent=$content .  " - user visited";
$fw=fwrite($fo,$maincontent . "\n");
fclose($fo);
$openagain=fopen($file,'r');
$fr=fread($openagain,filesize($file));
fclose($openagain);
echo "<pre> $fr </pre>";


?>