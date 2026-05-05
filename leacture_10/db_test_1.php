<?php
    $connect = mysqli_connect("localhost", "root", "", "blog");


    $select_roles_query = "SELECT * FROM roles";

    $roles_result = mysqli_query($connect, $select_roles_query);

   

    $data_of_roles_result = mysqli_fetch_all($roles_result);
    

    if(isset($_POST['role']) && !empty($_POST['role'])){
        $_role = $_POST['role'];
        $insert_roles_query = "INSERT INTO roles (role) VALUES ('$_role')";
        mysqli_query($connect, $insert_roles_query);
        header("location: db_test_1.php");
    }
?>

<style>
    table{
        border: solid 1px black;
        border-collapse: collapse;
    }

    table td, th {
        border: solid 1px black;
        padding: 8px;
    }

    form{
        width: 300px;
        border: solid 1px black;
        margin: auto;
        padding: 10px;
    }
</style>
<form method="post">
    Role: <input type="text" name="role">
    <br><br>
    <button>Insert Into Role</button>
</form>
<hr><hr>
<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Deleted_at</th>
    </tr>
    <?php
        foreach($data_of_roles_result as $row){
    ?>
    <tr>
        <td><?= $row[0]?></td>
        <td><?= $row[1]?></td>
        <td><?= $row[2]?></td>
        <td><?= $row[3]?></td>
        <td><?= $row[4]?></td>
        <td><?= $row[5]?></td>
    </tr>
    <?php
        }
    ?>
</table>
