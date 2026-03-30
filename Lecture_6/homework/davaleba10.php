<?php 
$dirpath="homeworkfiles/backup";
$createdir=mkdir($dirpath);
$filepath="homeworkfiles/backup/data.txt";
$createf=fopen($filepath,'w');
$writef=fwrite($createf,"hello world");
fclose($createf);
$readf=fopen($filepath,'r');
$read=fread($readf,filesize($filepath));
echo $read .  "<br>";
fclose($readf);
$file2="homeworkfiles/backup/data_copy.txt";
copy($filepath, $file2);
$file2op=fopen($file2,'r');
$file2read=fread($file2op,filesize($file2));
echo $file2read;
fclose($file2op);

?>