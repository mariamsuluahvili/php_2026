<?php  
$files="homeworkfiles/files";
$filecreate=mkdir($files);
/*$file1="homeworkfiles/files/file1.txt";
$fo1=fopen($file1,'w');
$fw1=fwrite($fo1,"pirveli paili");
$file2="homeworkfiles/files/file2.txt";
$fo2=fopen($file2,'w');
$fw2=fwrite($fo2,"meore paili paili");
$file3="homeworkfiles/files/file3.txt";
$fo3=fopen($file3,'w');
$fw3=fwrite($fo3,"mesame paili");
*/

for($i=1;$i<4;$i++){
    $filemisamarti=$files . "/file" . $i . ".txt";
    $fopen=fopen($filemisamarti,'w');
    $fwrite=fwrite($fopen,"es aris paili $i");
    
    }
$folder = scandir($files);

for($i=2;$i<count($folder);$i++){
    echo $folder[$i] . "<br>";
}




?>