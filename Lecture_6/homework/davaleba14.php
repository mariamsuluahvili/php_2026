<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="davaleba14.php" method="POST">
        <input type="text" name='usertxt'> 
        <button name='subbmit'>send</button>
    </form>
</body>
</html>

<?php 
if(isset($_POST['subbmit'])){
    $name=$_POST['usertxt'];
    $myfolder="homeworkfiles/".$name;
      $items=scandir($myfolder);
       $fileCount = 0;
    $folderCount = 0;
    $totalSize = 0;
       for($i=2;$i<count($items);$i++){
        $path = $myfolder . "/" . $items[$i];

        if(is_file($path)){
            $fileCount++;
            $totalSize += filesize($path); 
        } elseif(is_dir($path)){
            $folderCount++;
        }
    }

    echo "ფაილების რაოდენობა: $fileCount<br>";
    echo "საქაღალდეების რაოდენობა: $folderCount<br>";
    echo "ჯამური ზომა: $totalSize ბაიტი";


       }
    



?>