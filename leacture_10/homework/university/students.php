<?php 
$connect=mysqli_connect('localhost','root','','university');
$select="select * from students";
$query=mysqli_query($connect,$select);
$fetch=mysqli_fetch_all($query);

if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    $insert="insert into students (name,email,age) values ('$name','$email','$age')";
    mysqli_query($connect,$insert);
    header("location:students.php");
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
<form action="" method='POST'>
     name:
    <input type="text" name="name">
    email:
    <input type="text" name="email">
    age:
    <input type="text" name="age">
    <button name="send">send</button>
</form>
<table>
    <tr>
        <td>id</td>
         <td>name</td>
          <td>email</td>
           <td>age</td>
    </tr>
    <?php foreach($fetch as $row) {?>
    <tr>
        <td><?=$row[0] ?></td>
            <td><?= $row[1]?></td>
                <td><?= $row[2]?></td>
                    <td><?= $row[3] ?></td>
    </tr>
    <?php } ?>
</table>