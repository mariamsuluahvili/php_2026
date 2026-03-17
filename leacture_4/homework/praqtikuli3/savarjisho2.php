<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Table</title>

    <style>
        table, td {
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

<form method="post">
    <input type="text" name="m" placeholder="sheikvane M">
    <input type="text" name="n" placeholder="sheikvane N">
    <input type="text" name="a" placeholder="sheikvane a">
    <input type="text" name="b" placeholder="sheikvane b">
    <button type="submit" name="submit_clicked">Submit</button>
</form>

<?php
function generatetable($m, $n, $a, $b) {
?>
    <table>
        <?php for($i = 0; $i < $m; $i++) { ?>
            <tr>
                <?php for($j = 0; $j < $n; $j++) { ?>
                    <td><?= rand($a, $b) ?></td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>
<?php
}


if(isset($_POST['submit_clicked'])) {

    $m = $_POST['m'];
    $n = $_POST['n'];
    $a = $_POST['a'];
    $b = $_POST['b'];

    if(empty($m) || empty($n) || empty($a) || empty($b)) {
        ?>
        <p> შეავსე ყველა ველი!</p>
        <?php
    }
    elseif(!is_numeric($m) || !is_numeric($n) || !is_numeric($a) || !is_numeric($b)) {
        ?>
        <p> შეიყვანე მხოლოდ რიცხვები!</p>
        <?php
    }
    elseif($m <= 0 || $n <= 0) {
        ?>
        <p> M და N უნდა იყოს დადებითი!</p>
        <?php
    }
    elseif($a > $b) {
        ?>
        <p> a არ უნდა იყოს მეტი b-ზე!</p>
        <?php
    }
    else {
        generatetable($m, $n, $a, $b);
    }
}
?>

</body>
</html>