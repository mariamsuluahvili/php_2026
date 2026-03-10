<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>document</title>
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

<?php
$correct_answers=0;

if($_POST['q1'] == "b") $correct_answers++;
if($_POST['q2'] == "a") $correct_answers++;
if($_POST['q3'] == "d") $correct_answers++;
if($_POST['q4'] == "პროცესორი") $correct_answers++;
if($_POST['q5'] == "კლავიატურა") $correct_answers++;

echo "<h1>სწორი პასუხების რაოდენობაა: " . $correct_answers . "/5</h1>";
?>

</body>
</html>
