<?php 
$connect = mysqli_connect("localhost", "root", "", "blog");

$select = "SELECT * FROM roles";
$role_query = mysqli_query($connect, $select);
$fetch_roles = mysqli_fetch_all($role_query); 

if(isset($_POST['add']) && !empty($_POST['role'])){
    $role=$_POST['role'];
    $insert="INSERT INTO roles (role) values ('$role')";
    mysqli_query($connect,$insert);
    header("location:savarjisho2.php");

}
if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['edit']) && !empty($_POST['edit_role'])){
        $edit_role=$_POST['edit_role'];
        $date=date("Y-m-d H:I:S");
        $update="UPDATE roles set role='$edit_role', updated_at='$date' where id=$id";
        mysqli_query($connect,$update);
         header("location:savarjisho2.php");

    }
    $select_id="SELECT * FROM roles where id=$id";
    $id_query=mysqli_query($connect,$select_id);
    $fetch_id=mysqli_fetch_assoc($id_query);

   
}
 if(isset($_GET['del'])){
      $id=$_GET['del'];
      $delate="DELETE  FROM  roles where id=$id";
      mysqli_query($connect,$delate);
       header("location:savarjisho2.php");

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
<form method="POST">
    <?php if(isset($fetch_id)){ ?>
    edit role:
    <input type="text" name="edit_role" value="<?=$fetch_id['role'] ?>">
    <button name="edit">edit role</button>
</form>
<?php } ?>
<form method="POST">
    role:
    <input type="text" name="role">
    <button name="add">add role</button>
</form>

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
   <td><a href="?id=<?=$row[0]?>">edit</a></td>
   <td><a href="?del=<?=$row[0]?>">delate</a></td>
</tr>
<?php } ?>

</table>