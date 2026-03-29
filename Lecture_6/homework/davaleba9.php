<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form action="davaleba9.php" method="POST">
        <input type="text" name='usertxt'> 
        <button name='subbmit'>send</button>
    </form>
</body>
</html>

<?php   
if(isset($_POST['subbmit'])){
    $name="homeworkfiles/" . $_POST['usertxt'];
    if(file_exists($name)){
        $delate=unlink($name);
        echo "ფაილი წაიშალა";
    }
    else echo "ამ სახელით ფაილი არ არსებობს";
}


?>