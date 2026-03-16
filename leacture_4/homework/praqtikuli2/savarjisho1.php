<?php
session_start(); 

if(!isset($_SESSION['masivi'])) {
    $_SESSION['masivi'] = [];
    for($i=0;$i<12;$i++){
        $_SESSION['masivi'][] = rand(10,100);
    }
}

$masivi = $_SESSION['masivi'];

$meti = 0;
$naklebi = 0;

if($_SERVER['REQUEST_METHOD']=="POST"){
    $number = $_POST['number'];

    foreach($masivi as $value){
        if($value > $number){
            $meti++;
        } elseif($value < $number){
            $naklebi++;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Matrix Example</title>
<style>
   form {
        display: flex;             
        flex-direction: column;   
        align-items: center;       
        justify-content: center;   
        gap: 10px;                 
        height: 200px;             
    }
</style>
</head>
<body>
<form action="" method="post">
   <h2>შეიყვანე რიცხვი</h2>  
   <input type="number" name="number" value="<?php if(isset($_POST['number'])) echo $_POST['number']; ?>">
   <br>
   <button>submit</button>
</form>


<p>მასივი: <?= implode(" ", $masivi); ?></p>


<?php if($_SERVER['REQUEST_METHOD']=="POST"){ ?>
    <p>მეტი: <?= $meti ?></p>
    <p>ნაკლები: <?= $naklebi ?></p>
<?php } ?>
</body>
</html>