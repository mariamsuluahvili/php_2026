<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }

        td {
            padding: 5px;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
function createtable() {
?>
    <table>
        <?php for($i = 0; $i < 10; $i++) { ?>
            <tr>
                <?php for($j = 0; $j < 10; $j++) { ?>
                    <td><?php echo rand(10, 99); ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
<?php
}

createtable();
?>

</body>
</html>