<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TXT ფაილების ჩვენება</title>
</head>
<body>

<form method="POST">
    <input type="text" name="foldername" placeholder="შეიყვანეთ საქაღალდის სახელი">
    <button type="submit" name="submit">გაგზავნა</button>
</form>


</body>
</html>



<?php
if(isset($_POST['submit'])){
    $folder =  $_POST['foldername'];
    $files = scandir($folder);

    echo "<h3>.txt ფაილები საქაღალდეში '{$folder}':</h3>";

    
    for($i = 2; $i < count($files); $i++){ 
        $file = $files[$i];
        $filepath = $folder . "/" . $file;

        if(is_file($filepath)){
            $parts = explode(".", $file);
            $end = end($parts); 

            if($end == "txt"){
                $size = filesize($filepath); 
                $ctime = date("d.m.Y H:i:s", filectime($filepath)); 
                echo "ფაილი: $file | ზომა: $size ბაიტი | შექმნილია: $ctime<br>";
            }
        }
    }
}


?>