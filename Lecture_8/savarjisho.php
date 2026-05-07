<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="mari" >
    <button name="atvirtva">atvirtva</button>
</form>

<?php 
if(isset($_POST['atvirtva'])){
    $extension=pathinfo($_FILES['mari']['name'])['extension'];
    if($extension=='.pptx'|| $extension==".txt"){
        move_uploaded_file($_FILES['mari']['tmp_name'],"storage/".$_FILES['mari']['name']);
    }
else{
    echo "pailis  pormati arasworia";
}
}
?>