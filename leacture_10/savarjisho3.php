<?php 
$connect=mysqli_connect("localhost","root","","blog");
$select="SELECT * FROM roles";
$query=mysqli_query($connect,$select);
$fetch=mysqli_fetch_all($query);

if(isset($_POST['add'])){
    $role=$_POST['role'];
    $insert="INSERT INTO roles (role) values ('$role')";
    mysqli_query($connect,$insert);
    header("location:savarjisho3.php");
}
if(isset($_GET['id'])){
    $id=$_GET['id'];

    if(isset($_POST['edit']) && !empty($_POST['editrole'])){
        $editrole=$_POST['editrole'];
        $date=date("Y-m-d H:I:S");
        $update="UPDATE roles set role='$editrole', updated_at='$date' where id=$id";
        mysqli_query($connect,$update);
        header("location:savarjisho3.php");
    }
    $select_by_id="SELECT * FROM roles WHERE id=$id";
    $select_query_byid=mysqli_query($connect,$select_by_id);
    $fetch_id=mysqli_fetch_assoc($select_query_byid);
}
if(isset($_GET['delid'])){
    $id=$_GET['delid'];
    $delate="DELETE  from roles where id=$id";
    mysqli_query($connect,$delate);
    header("location:savarjisho3.php");
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
 <?php foreach($fetch as $m){ ?>
 <tr>
    <td><?= $m[0]?></td>
    <td><?= $m[1]?></td>
    <td><?= $m[2]?></td>
    <td><?= $m[3]?></td>
    <td><?= $m[4]?></td>

    <td><a href="?id=<?=$m[0] ?>">edit</a></td>
    <td><a href="?delid=<?=$m[0] ?>">delate</a></td>
    
 </tr>
 <?php }?>
</table>
 <form action="" method="POST">
    role 
    <input type="text" name="role">
    <button name="add">add role</button>
 </form>
 <?php if(isset($fetch_id)){ ?>
  <form action="" method="POST">
    edit role :
    <input type="text" name="editrole" value="<?= $fetch_id['role'] ?>">
    <button name="edit">edit role</button>
 </form>
 <?php }?>