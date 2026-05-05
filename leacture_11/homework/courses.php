<?php 
$connect = mysqli_connect("localhost", "root", "", "university");


$lecturers_query = "SELECT * FROM lecturers";
$lecturers_result = mysqli_query($connect, $lecturers_query);


$select = "SELECT * FROM courses";
$query = mysqli_query($connect, $select);
$fetch = mysqli_fetch_all($query);


if(isset($_POST['chamateba']) && !empty($_POST['title']) && !empty($_POST['credits'])){

    $title = $_POST['title'];
    $credits = $_POST['credits'];
    $lecturer_id = $_POST['lecturer_id'];

    $insert = "INSERT INTO courses (title, credits, lecturer_id) 
               VALUES ('$title', '$credits', '$lecturer_id')";

    mysqli_query($connect, $insert);

     header("Location: courses.php") ;
    
}

?>

<style>
    table{
        border:1px solid black;
        border-collapse:collapse;
    }
    td,th{
        border:1px solid black;
        padding:5px;
    }
</style>


<form action="" method="POST">
    title <input type="text" name="title">
    credits <input type="text" name="credits">

    lecturer id 
    <select name="lecturer_id">
    
        <?php while($titoeuli = mysqli_fetch_assoc($lecturers_result)) { ?>
            <option value="<?= $titoeuli['id'] ?>">
                <?= $titoeuli['name'] ?>
            </option>
        <?php } ?>
    </select>
    

    <button name="chamateba">chamateba</button>
</form>
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>credits</th>
        <th>lecturer_id</th>
        
    </tr>

    <?php foreach($fetch as $row){ ?>
    <tr>
        <td><?= $row[0] ?></td>
        <td><?= $row[1] ?></td>
        <td><?= $row[2] ?></td>
        <td><?= $row[3] ?></td>
      
    </tr>
    <?php } ?>
</table>