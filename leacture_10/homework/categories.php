<?php
$connect = mysqli_connect("localhost", "root", "", "blog");

$select_query = "SELECT * FROM categories";
$result = mysqli_query($connect, $select_query);
$data = mysqli_fetch_all($result);


if(isset($_POST['name']) && !empty($_POST['name'])){
    $name = $_POST['name'];

    $insert_query = "INSERT INTO categories (name) 
                     VALUES ('$name')";
    mysqli_query($connect, $insert_query);

    header("location: categories.php");
   
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
    Category Name: <input type="text" name="name"><br><br>
    <button>Add Category</button>
</form>

<hr><hr>


<table>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Created At</th>
</tr>

<?php foreach($data as $row){ ?>
<tr>
    <td><?= $row[0] ?></td>
    <td><?= $row[1] ?></td>
    <td><?= $row[2] ?></td>
</tr>
<?php } ?>
</table>