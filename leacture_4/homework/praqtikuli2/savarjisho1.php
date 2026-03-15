<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
   <h2>sheikvane ricxvi</h2>  
  <input type="" name="number" >
    <br>
    <button>submit</button>

</form>
</body>
</html> 

<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
$number=$_POST['number'];
$masivi=[];
for($i=0;$i<12;$i++){
    $masivi[]=rand(10,100);

}
$meti=0;
$naklebi=0;
foreach($masivi as $value){
    if($value>$number){
    $meti++;
    }
    elseif($value<$number){
        $naklebi++;
    }
   
}

echo "masivi:";
echo implode (", ", $masivi);
echo "<br>";
echo "meti: $meti";
echo "<br>";
echo "naklebi: $naklebi";
}
?>