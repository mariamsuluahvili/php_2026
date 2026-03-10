<?php
$qula=$_POST['qula'];
if($qula >=90){
    $shepaseba= 'A-ფრიადი';
}
else if($qula >=80){
    $shepaseba= 'B- ძალიან კარგი';
}
else if($qula>=70){
    $shepaseba= 'C-კარგი';
}
else if($qula>=60){
    $shepaseba= 'D-დამაკმაყოფილებელი';
}
else if($qula>=51){
    $shepaseba= 'E-საკმარისი';
}
else{
    $shepaseba= 'F/FX-წარუმატებელი';
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
    </style>
</head>
<body>
    <table>
    <tr>
        <th>სახელი</th>
        <td><?= $_POST['saxeli'] ?></td>
        </tr>
        <tr>
        <th>გვარი</th>
        <td><?= $_POST['gvari'] ?></td>
        </tr>
        <tr>
        <th>კურსი</th>
        <td><?= $_POST['kursi'] ?></td>
        </tr>
        <tr>
        <th>სემესტრი</th>
        <td><?= $_POST['semestri'] ?></td>
        </tr>
        <tr>
        <th>საგანი</th>
        <td><?= $_POST['saswavlokursi'] ?></td>
        </tr>
        <tr>
        <th>ქულა</th>
        <td><?= $qula ?></td>
        </tr>
        <tr>
        <th>შეფასება</th>
        <td><?= $shepaseba ?></td>
        </tr>
        <tr>
        <th>ლექტორის სახელი და გვარი</th>
        <td><?= $_POST['lektori'] ?></td>
        </tr>
        <tr>
        <th>დეკანის სახელი და გვარი</th>
        <td><?= $_POST['dekani'] ?></td>
        </tr>
    </table>
</body>
</html>
