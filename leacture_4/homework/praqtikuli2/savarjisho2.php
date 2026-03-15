<?php
$masivi = [];
for($i=0;$i<4;$i++){
    for($j=0;$j<4;$j++){
        $masivi[$i][$j] = rand(10,100);
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{
            border:1px solid black;
            border-collapse:collapse;
            padding:7px;
        }
        form {
            display: flex;
            flex-direction: column;
            width:120px
        }
        .table-in-table{
             border:1px solid black;
            border-collapse:collapse;
            padding:7px;
        }
    </style>
</head>
<body>
   <div>
    <h2>მთლიანი მატრიცა:</h2>
    <table class="matrica">
        <?php  for ($i=0; $i<4; $i++){
            for($j=0;$j<4;$j++){
?>
                <td><?= $masivi[$i][$j] ?></td>
<?php } ?>
        </tr>
<?php }?>
   </div>
    <div>
        </table>
    <h2>მატრიცის დიაგონალის ზემოთ მდგომი რიცხვებო:</h2>
    <table>
          <?php  for ($i=0; $i<4; $i++){
            for($j=0;$j<4;$j++){
                if($i<$j){
?>
                <td><?= $masivi[$i][$j] ?></td>

                <?php } ?>
</tr>
 <?php } ?>
  <?php } ?>
</table>
    </div>
    <br>
 <div>
    <h2>x-ის ჯერადებია:</h2>
    <form action="" method="post">
        <input type="number" name="number" placeholder="sheikvane x">
        <br>
        <input type="submit" name="submit">
    </form>
 </div>
 <?php 
 
if(isset($_POST['submit'])){
    $number=$_POST['number'];
 for($i=0;$i<count($masivi);$i++){
    for($j=0;$j<count($masivi[$i]);$j++){
        if($masivi[$i][$j]%$number==0){
            echo $masivi[$i][$j]." ";
        }
    }
 }
}

 ?>
 <div>
<?php 
$jami=0;
$namravli=1;
$cipjami=[];
$sashualo=1;
for($i=0;$i<count($masivi);$i++){
    for($j=0;$j<count($masivi[$i]);$j++){
        $jami+=$masivi[$i][$j];
        $namravli*=$masivi[$i][$j];
        $sashualo=$jami/count($masivi);
     $cipjami[$i][$j] = array_sum(str_split($masivi[$i][$j]));
     }
    }


?>
<br>
<h2>სტატისტიკა:</h2>
<table>
<tr>
    <th>ჯამი</th>
    <th>ნამრავლი</th>
    <th>საშუალო</th>
    <th>განი</th>
    <th>ციფრების ჯამი</th>
</tr>
<tr>
    <td><?= $jami ?></td>
    <td><?= $namravli ?></td>
    <td><?= $sashualo ?></td>
    <td>
        <?php 
        for ($i = 0; $i < 4; $i++) {
            echo $masivi[$i][$i] . " ";
        }
        ?>
    </td>
    <td class="table-in-table">
        <table>
        <?php for ($i = 0; $i < 4; $i++) { ?>
            <tr>
            <?php for ($j = 0; $j < 4; $j++) { ?>
                <td><?= $cipjami[$i][$j] ?></td>
            <?php } ?>
            </tr>
        <?php } ?>
        </table>
    </td>
</tr>
</table>

 </table>
 </div>


</body>
</html>


