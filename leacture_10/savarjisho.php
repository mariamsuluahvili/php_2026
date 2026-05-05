<?php 
$connect = mysqli_connect("localhost", "root", "", "blog");

$select = "SELECT * FROM roles";
$role_query = mysqli_query($connect, $select);
$fetch_roles = mysqli_fetch_all($role_query);


if (isset($_POST['add']) && !empty($_POST['role'])){
    $role = $_POST['role'];

    $insert = "INSERT INTO roles (role) VALUES ('$role')";
    mysqli_query($connect, $insert);

    header("location: savarjisho.php");
   
}


if(isset($_GET['delete'])){
    $id = $_GET['delete'];

    $delete = "DELETE FROM roles WHERE id=$id";
    mysqli_query($connect, $delete);

    header("location: savarjisho.php");
   
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];

    if(isset($_POST['edit']) && !empty($_POST['edit_role'])){
        $role = $_POST['edit_role'];
        $date = date("Y-m-d H:i:s");

        $update = "UPDATE roles 
                   SET role='$role', updated_at='$date' 
                   WHERE id=$id";

        mysqli_query($connect, $update);

        header("location: savarjisho.php");
        
    }

    $select_by_id = "SELECT * FROM roles WHERE id=$id";
    $query_id = mysqli_query($connect, $select_by_id);
    $fetch_assoc = mysqli_fetch_assoc($query_id);
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

<?php if(isset($fetch_assoc)) { ?>
<form method="POST">
    <h3>Edit Role</h3>
    role:
    <input type="text" name="edit_role" value="<?= $fetch_assoc['role'] ?>">
    <button name="edit">update role</button>
</form>
<?php } ?>

<hr>


<form method="POST">
    role:
    <input type="text" name="role">
    <button name="add">add role</button>
</form>

<hr>


<table>
<tr>
    <th>id</th>
    <th>role</th>
    <th>created_at</th>
    <th>updated_at</th>
    <th>deleted_at</th>
    <th>edit</th>
    <th>delete</th>
</tr>

<?php foreach($fetch_roles as $row){ ?>
<tr>
    <td><?= $row[0] ?></td>
    <td><?= $row[1] ?></td>
    <td><?= $row[2] ?></td>
    <td><?= $row[3] ?></td>
    <td><?= $row[4] ?></td>

    <td><a href="?edit=<?= $row[0] ?>">edit</a></td>
    <td><a href="?delete=<?= $row[0] ?>">delete</a></td>
</tr>
<?php } ?>

</table>