<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="davaleba7.php" method="POST">
        <input type="text" name='usertxt'> 
        <button name='subbmit'>send</button>
    </form>
</body>
</html>

<?php 
if(isset($_POST['subbmit'])){
    $name=$_POST['usertxt'];
    $myfolder="homeworkfiles/".$name;
    if(!is_dir($myfolder)){
        $create=mkdir($myfolder);
        $filepath=$myfolder. "/file.txt";
        $fo=fopen($filepath,'w');
        $fw=fwrite($fo,"es paili sheikmna");
        echo "ფოლდერი შეიქმნა";
    }
    else{
       $read=scandir($myfolder);
       for($i=2;$i<count($read);$i++){
        echo "ფოლდერი უკვე არსებობს და მასში არის ფაილი:" . $read[$i];
       }
    }
}


?>