<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="davaleba12.php" method='POST'>
            <input type="text" name='dir' placeholder='enter dir name'>
             <input type="text" name='file' placeholder='enter file name'>
        <button name='subbmit'>send</button>
    </form>
</body>
</html>
<?php  
if(isset($_POST['subbmit'])){
    $dir=$_POST['dir'];
    $file=$_POST['file'];
    $dirpath="homeworkfiles/" . $dir;
    $createdir=mkdir($dirpath);
    $filepath=$dirpath . "/" . $file;
    $createfile=fopen($filepath,'a');
    fwrite($createfile,"gamarjoba" . "\n");
    fclose($createfile);
    $fo=fopen($filepath,'r');
    $fread=fread($fo,filesize($filepath));
    echo "<pre> $fread </pre>";
    
}



?>