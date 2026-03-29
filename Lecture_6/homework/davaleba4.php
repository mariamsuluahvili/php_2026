<?php
$file = "homeworkfiles/numbers.txt";


$fcreate = fopen($file, 'w');

$sum = 0; 

for($i = 0; $i < 10; $i++){
    $number = rand(1, 100);
    fwrite($fcreate, $number . "\n"); 
    echo $number . "<br>";             
    $sum += $number;                   
}

fclose($fcreate);

echo "Sum: " . $sum;
?>