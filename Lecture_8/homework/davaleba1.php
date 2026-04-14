<?php
if(isset($_POST['upload1'])){
    $maxSize = 1024 * 1024 * 100;
    $ext = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));

    if(($ext == "png" || $ext == "jpg" || $ext == "jpeg" || $ext == "gif") && $_FILES['img']['size'] <= $maxSize){
        if(!is_dir("images")) mkdir("images");
        move_uploaded_file($_FILES['img']['tmp_name'], "images/".$_FILES['img']['name']);
        echo "Uploaded!";
    } else {
        echo "Wrong file!";
    }
}
?>

<h2>Upload Image</h2>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="img"><br><br>
    <button name="upload1">Upload</button>
</form>