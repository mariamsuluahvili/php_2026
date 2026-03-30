<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="davaleba11.php" method='POST'>
        <input type="text" name='dirname' placeholder='enter directory name'>
        <button name='subbmit'>send</button>
    </form>
</body>
</html>

<?php  
if(isset($_POST['subbmit'])){
        $name=$_POST['dirname'];
    $dirpath="homeworkfiles/". $name;
    if(!empty($name)){
        if(!file_exists($dirpath)){
           $dir= mkdir($dirpath);
           $filepath=$dirpath . "/info.txt";
           $fcreate=fopen($filepath,'w');
           $time = date("d.m.Y H:i:s"); 
           $content="საქაღალდის სახელი-" . $name . "შექმნის თარიღი" . $time;
           fwrite($fcreate,$content);
           fclose($fcreate);
           $fop=fopen($filepath,'r');
           $fread=fread($fop,filesize($filepath));
           echo $fread;
           fclose($fop);
        }
        else{
            echo "საქაღალდე უკვე არსებობს";
        }
    }
    else {
        echo "საქაღალდის სახელი აუცილებელია";
    }
}


?>