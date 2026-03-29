<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Matrix</title>
    <style>
        table, td {
            border:1px solid black;
            border-collapse:collapse;
        }
        td{
            padding:5px;
            text-align:center;
        }
    </style>
</head>
<body>

<form method="POST">
    <input type="text" name="M" placeholder="input M">
    <input type="text" name="N" placeholder="input N">
    <input type="text" name="a" placeholder="input a">
    <input type="text" name="b" placeholder="input b">
    <button name="submit_click">create matrix</button>
</form>

<br><br>

<?php

function creatematrix($M,$N,$a,$b){
    $matrica = array();
    for($i=0;$i<$M;$i++){
        for($j=0;$j<$N;$j++){
            $matrica[$i][$j] = rand($a,$b);
        }
    }
    return $matrica;
}

if(isset($_POST['submit_click'])){

    $M = $_POST['M'];
    $N = $_POST['N'];
    $a = $_POST['a'];
    $b = $_POST['b'];

    if(empty($M) || empty($N) || empty($a) || empty($b)){
        ?>
        <p style="color:red;">ველის შევსება აუცილებელია</p>
        <?php
    }
    else if(!is_numeric($M) || !is_numeric($N) || !is_numeric($a) || !is_numeric($b)){
        ?>
        <p style="color:red;">აუცილებლად რიცხვი უნდა იყოს</p>
        <?php
    }
    else{

        $matrica = creatematrix($M,$N,$a,$b);

  
        $colSum = [];
        for($j=0; $j<$N; $j++){
            $colSum[$j] = 0;
        }
        ?>

        <table>

        <?php for($i=0;$i<$M;$i++){ 
            $rowSum = 0;
        ?>
            <tr>
                <?php for($j=0;$j<$N;$j++){ 
                    $rowSum += $matrica[$i][$j];
                    $colSum[$j] += $matrica[$i][$j];
                ?>
                    <td><?php echo $matrica[$i][$j]; ?></td>
                <?php } ?>

                
                <td><b><?php echo $rowSum; ?></b></td>
            </tr>
        <?php } ?>

      
        <tr>
            <?php for($j=0;$j<$N;$j++){ ?>
                <td><b><?php echo $colSum[$j]; ?></b></td>
            <?php } ?>
            <td></td>
        </tr>

        </table>

        <?php
    }
}
?>

</body>
</html>