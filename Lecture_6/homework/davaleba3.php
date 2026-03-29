<?php 
$file="homeworkfiles/data.txt";
if(file_exists($file)){
    echo "ფაილი უკვე არსებობს";
}
else{
    $fcreate=fopen($file,'w');
    $fwrite=fwrite($fcreate,"file is created");
    fclose($fcreate);
}



?>