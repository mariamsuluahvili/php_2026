<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TXT Summary</title>
</head>
<body>

<form method="POST">
    <input type="text" name="foldername" placeholder="შეიყვანეთ საქაღალდის სახელი">
    <button type="submit" name="submit">გაგზავნა</button>
</form>

<?php

if(isset($_POST['submit'])){
    $folder = $_POST['foldername'];

    if(!is_dir($folder)){
        echo "საქაღალდე '{$folder}' არ არსებობს.";
        exit;
    }

    $summaryPath = $folder . "/summary.txt";
    $summary = fopen($summaryPath, "w");
    $files = scandir($folder);

    for($i = 0; $i < count($files); $i++){
        $file = $files[$i];
        $filepath = $folder . "/" . $file;

        if(is_file($filepath)){
            $parts = explode(".", $file);
            $extension = end($parts);

            if($extension == "txt"){
                $size = filesize($filepath);
                $fileContent = "";

                if($size > 0){ 
                    $f = fopen($filepath, "r");
                    $fileContent = fread($f, $size);
                    fclose($f);
                }

                fwrite($summary, "ფაილი: $file\n");
                fwrite($summary, "შიგთავსი:\n$fileContent\n");
            }
        }
    }

    fclose($summary);

    if(filesize($summaryPath) > 0){
        echo "summary.txt შეიქმნა საქაღალდეში '{$folder}'!";
    } else {
        unlink($summaryPath);
        echo "საქაღალდეში '{$folder}' .txt ფაილები არ არსებობს.";
    }
}
?>
</body>
</html>