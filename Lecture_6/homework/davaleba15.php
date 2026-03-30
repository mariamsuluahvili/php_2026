<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TXT ფაილების გადატანა</title>
</head>
<body>

<form method="POST">
    <input type="text" name="source" placeholder="საწყისი საქაღალდის სახელი">
    <input type="text" name="target" placeholder="სამიზნე საქაღალდის სახელი">
    <button type="submit" name="submit">გაგზავნა</button>
</form>

<?php
if(isset($_POST['submit'])){
    $source = "homeworkfiles/" . $_POST['source'];
    $target = "homeworkfiles/" . $_POST['target'];

    if(!is_dir($target)){
        mkdir($target);
    }

    $files = scandir($source);
    $movedFiles = [];
    $count = 0;

    for($i = 2; $i < count($files); $i++){
        $file = $files[$i];
        $sourcePath = $source . "/" . $file;
        $targetPath = $target . "/" . $file;

        if(is_file($sourcePath)){
            $parts = explode(".", $file);
            $extension = end($parts);

            if($extension == "txt"){
                copy($sourcePath, $targetPath);
                $movedFiles[] = $file;
                $count++;
            }
        }
    }

    echo "გადაიტანილი ფაილების რაოდენობა: $count<br>";

    if($count > 0){
        echo "გადაიტანილი ფაილები ახალ საქაღალდეში:<br>";
        foreach($movedFiles as $f){
            echo "- $f<br>";
        }
    } else {
        echo "საწყისი საქაღალდეში .txt ფაილები არ მოიძებნა.";
    }
}
?>
</body>
</html>