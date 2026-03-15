<?php
$matrica = [
    [12, 34, 56, 78, 89],
    [90, 23, 45, 67, 78],
    [89, 12, 34, 56, 67],
    [78, 90, 23, 45, 56],
    [67, 89, 12, 34, 45]
];
?>

<!DOCTYPE html>
<html lang="ka">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>document</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 7px;
            text-align: center;
        }
        td {
            width: 100px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>ელემენტი</th>
        <th>ინდექსების ჯამი</th>
    </tr>

<?php
for($i=0;$i<count($matrica);$i++){
    for($j=0;$j<count($matrica[$i]);$j++){
?>
        <tr>
            <td><?= $matrica[$i][$j] ?></td>
            <td><?= $i + $j ?></td>
        </tr>
<?php
    }
}
?>
</table>


</body>
</html>