<?php
  if($_GET['gadaxdistipi'] == "piksirebuli"){
    $procenti = 20;
} else {
    $procenti = $_GET['asarchevi'];
}
    
    $gadasaxadi = $_GET['anazghaureba'] * $procenti / 100;
    $xelfasixeleze = $_GET['anazghaureba'] - $gadasaxadi;

    echo "<hr>";
    echo "<table border='1' cellpadding='8' cellspacing='0' style='margin:0 auto; text-align:center;'>";
    echo "<tr><th>სახელი და გვარი</th><td>".$_GET['saxeli']." ".$_GET['gvari']."</td></tr>";
    echo "<tr><th>თანამდებობა</th><td>".$_GET['tanamdeboba']."</td></tr>";
    echo "<tr><th>დარიცხული ხელფასი</th><td>".$_GET['anazghaureba']."</td></tr>";
    echo "<tr><th>გადასახადი (%)</th><td>".$procenti."%</td></tr>";
    echo "<tr><th>გადასახადის თანხა</th><td>".$gadasaxadi."</td></tr>";
    echo "<tr><th>ხელზე ასაღები თანხა</th><td>".$xelfasixeleze."</td></tr>";
    echo "</table>";

?>