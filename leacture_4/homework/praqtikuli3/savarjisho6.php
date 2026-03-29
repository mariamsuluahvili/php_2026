<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Random Matrix with Sums</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

<form method="post">
    <input type="text" name="M" placeholder="Enter M">
    <input type="text" name="N" placeholder="Enter N">
    <input type="text" name="a" placeholder="Enter a">
    <input type="text" name="b" placeholder="Enter b">
    <button type="submit" name="submit_click">Submit</button>
</form>

<?php
if (isset($_POST['submit_click'])) {

    $M = $_POST['M'];
    $N = $_POST['N'];
    $a = $_POST['a'];
    $b = $_POST['b'];

    if (!is_numeric($M) || !is_numeric($N) || !is_numeric($a) || !is_numeric($b)) {
        ?>
        <p style="color:red;">ყველა ველი უნდა იყოს რიცხვი!</p>
        <?php
    } else if ($M <= 0 || $N <= 0) {
        ?>
        <p style="color:red;">M და N უნდა იყოს დადებითი!</p>
        <?php
    } else if ($a > $b) {
        ?>
        <p style="color:red;">a არ უნდა იყოს მეტი b-ზე!</p>
        <?php
    } else {

        $matrix = array();
        for ($i = 0; $i < $M; $i++) {
            $matrix[$i] = array();
            for ($j = 0; $j < $N; $j++) {
                $matrix[$i][$j] = rand($a, $b);
            }
        }


        $colSums = array();
        for ($j = 0; $j < $N; $j++) {
            $colSums[$j] = 0;
        }
        ?>

        <table>
            <?php
        
            for ($i = 0; $i < $M; $i++) {
                ?>
                <tr>
                <?php
                $rowSum = 0;
                for ($j = 0; $j < $N; $j++) {
                    ?>
                    <td>
                    <?php
                    print $matrix[$i][$j];
                    $rowSum += $matrix[$i][$j];
                    $colSums[$j] += $matrix[$i][$j];
                    ?>
                    </td>
                    <?php
                }
                ?>
                <td><strong><?php print $rowSum; ?></strong></td> 
                </tr>
                <?php
            }
            ?>

           
            <tr>
            <?php
            for ($j = 0; $j < $N; $j++) {
                ?>
                <td><strong><?php print $colSums[$j]; ?></strong></td>
                <?php
            }
            ?>
            <td></td> 
            </tr>
        </table>

        <?php
    }
}
?>

</body>
</html>