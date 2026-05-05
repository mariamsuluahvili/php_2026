<?php 
$connect=mysqli_connect("localhost","root","","university");
$select_query="select * from lecturers";
$sql_query=mysqli_query($connect,$select_query);
$result=mysqli_fetch_all($sql_query);


if(isset($_POST['send'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $departament=$_POST['departament'];
    $insert="insert into lecturers (name, email, departament) values ('$name','$email','$departament')";
    mysqli_query($connect,$insert);
    header("Location: lecturers.php");
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
</style>
<form action="" method='POST'>
    name:
    <input type="text" name="name">
    email:
    <input type="text" name="email">
    departament:
    <input type="text" name="departament">
    <button name="send">send</button>
</form>
<table>
    <tr>
    <td>id</td>
     <td>name</td>
      <td>email</td>
       <td>departament</td>

    </tr>
    <?php foreach($result as $row) {?>
    <tr>
        <td><?=$row[0] ?></td>
         <td><?= $row[1] ?></td>
          <td><?= $row[2] ?></td>
           <td><?= $row[3] ?></td>
    </tr>
    <?php }?>
</table>