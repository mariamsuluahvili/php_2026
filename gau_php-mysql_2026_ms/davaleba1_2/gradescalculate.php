<?php
$saxeli=$_POST['saxeli'];
$gvari=$_POST['gvari'];
$kursi=$_POST['kursi'];
$semestri=$_POST['semestri'];
$qula=$_POST['qula'];
$sagani=$_POST['sagani'];
$saxeligvari=$_POST['saxeligvari'];
$saxeligvari_dek=$_POST['saxeligvari_dek'];

if($qula >=90){
    $grade='A';
}
else if($qula >=80){
    $grade='B';
}
else if($qula >=70){
    $grade='C';
}
else if($qula >=60){
    $grade='D';
}
else{
    $grade='F';
}
 
echo "<hr>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='margin:0 auto; text-align:center;'>";
echo "<tr><th>სახელი</th><td>".$saxeli."</td></tr>";
echo "<tr><th>გვარი</th><td>".$gvari."</td></tr>";
echo "<tr><th>კურსი</th><td>".$kursi."</td></tr>";
echo "<tr><th>სემესტრი</th><td>".$semestri."</td></tr>";
echo "<tr><th>ქულა</th><td>".$qula."</td></tr>";
echo "<tr><th>საგანი</th><td>".$sagani."</td></tr>";
echo "<tr><th>ლექტორის სახელი და გვარი</th><td>".$saxeligvari."</td></tr>";
echo "<tr><th>დეკანის სახელი და გვარი</th><td>".$saxeligvari_dek."</td></tr>";
echo "<tr><th>შეფასება</th><td>".$grade."</td></tr>";
echo "</table>";
?>