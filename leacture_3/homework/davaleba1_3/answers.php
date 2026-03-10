<?php
$sworipasuxebi = 0;

if($_POST["q1"] == 'b'){
  
    $sworipasuxebi++;
} 

if($_POST["q2"] == "a"){
   
    $sworipasuxebi++;
} 

if($_POST["q3"] == "d"){
 
    $sworipasuxebi++;
} else 

if($_POST["q4"] == "CPU"){

    $sworipasuxebi++;
} 

if($_POST["q5"] == "კლავიატურა"){
    
    $sworipasuxebi++;
} 
echo "<h1>თქვენი ქულა არის: ".$sworipasuxebi."/5</h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
 
    background-color: #56dac8;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

h1 {
    background-color: #2ecc71; 
    color: white;              
    padding: 20px 40px;             
    text-align: center;
}
    </style>
</head>
<body>
    
</body>
</html>