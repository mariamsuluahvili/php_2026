<?php
$name=$_GET["name"];
$lastname=$_GET["lastname"];
$salary=$_GET["salary"];
$position=$_GET["position"];
$gadaxdistipi=$_GET["gadaxdistipi"];
$asarchevi=$_GET["asarchevi"];

if($gadaxdistipi=="piksirebuli"){
    $procenti=20;
}
else{
    $procenti=$asarchevi;
}

$gadasaxadi=$salary*$procenti/100;
$xelzeasagebi=$salary-$gadasaxadi;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Document</title>
<style>
    table,td,th{
        Border:1px solid black  ;
        border-collapse: collapse;
        padding:7px;
    }
</style>
</head>

<body>

<table >

<tr>
<th>name</th>
<td><?= $name ?></td>
</tr>

<tr>
<th>lastname</th>
<td><?= $lastname ?></td>
</tr>

<tr>
<th>position</th>
<td><?= $position ?></td>
</tr>

<tr>
<th>salary</th>
<td><?= $salary ?></td>
</tr>

<tr>
<th>gadasaxadi</th>
<td><?= $gadasaxadi ?></td>
</tr>

<tr>
<th>procenti</th>
<td><?= $procenti ?></td>
</tr>

<tr>
<th>xelzeasagebi</th>
<td><?= $xelzeasagebi ?></td>
</tr>

</table>

</body>
</html>