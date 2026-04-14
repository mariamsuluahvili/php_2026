<?php
if(isset($_POST['upload'])){

    $file = $_FILES['file'];

    $maxSize = 1024 * 1024 * 50; 

    if($file['size'] <= $maxSize){

        if(!is_dir("files")){
            mkdir("files");
        }

        move_uploaded_file($file['tmp_name'], "files/".$file['name']);
    }
}



if(isset($_POST['delete'])){
    $fileToDelete = $_POST['delete'];
    unlink("files/".$fileToDelete);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload & Delete</title>

    <style>
        body{
            font-family: Arial;
        }

        .box{
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid black;
            background: #f5f5f5;
        }

        li{
            margin: 8px 0;
        }

        button{
            margin-left: 10px;
        }
    </style>
</head>

<body>

<div class="box">

    <h3>Upload File</h3>

    <form method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="upload">Upload</button>
    </form>

    <hr>

    <h3>Files</h3>

    <ul>

    <?php
    if(is_dir("files")){
        $files = scandir("files");

        for($i = 2; $i < count($files); $i++){
            $f = $files[$i];

            echo "<li>
                    $f

                  </li>";
        }
    }
    ?>

    </ul>

</div>

</body>
</html>