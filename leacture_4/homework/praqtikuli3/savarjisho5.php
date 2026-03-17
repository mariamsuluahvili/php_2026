<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user_input">
        <button>submit</button>
    </form>
    <?php    
    if(isset($_POST['user_input'])){
        $a=$_POST['user_input'];
        function checknum($a){
            return strlen($a);
        }
        if(is_numeric($a)){
        echo checknum($a);}
        else{
            echo "შეიყვანე რიცხვი";
        }
    }
    ?>
    


</body>
</html>