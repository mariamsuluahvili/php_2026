<?php 
$file="homeworkfiles/test.txt";
$createf=fopen($file,'w');
//echo $createf;
$content="hello world";
$writef=fwrite($createf,$content);
//echo $writef;
fclose($createf);
$readf=fopen($file,'r');
$readcontent = fread($readf, filesize($file));
echo $readcontent;
fclose($readf);

?>