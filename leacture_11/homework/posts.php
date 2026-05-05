<?php
$connect = mysqli_connect("localhost", "root", "", "blog");
$select_posts = "SELECT * FROM posts";
$posts_query = mysqli_query($connect, $select_posts);
$fetch_post = mysqli_fetch_all($posts_query);

// DELETE
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delate="DELETE FROM posts WHERE id=$id";
    mysqli_query($connect, $delate);
    header("location: posts.php");
}

// UPDATE
if(isset($_GET['id'])){
    $id = $_GET['id'];

    if(isset($_POST['content'])){
        $content = $_POST['content'];
        $date = date("Y-m-d H:i:s");

        $update_post = "UPDATE posts 
                        SET content='$content', updated_at='$date' 
                        WHERE id=$id";

        mysqli_query($connect, $update_post);
        header("location: posts.php");
      
    }

    
    $select_post_by_id = "SELECT * FROM posts WHERE id = $id";
    $result_post_by_id  = mysqli_query($connect, $select_post_by_id);
    $row_post_by_id = mysqli_fetch_assoc($result_post_by_id);
}



?>

<style>
table{
    border: solid 1px black;
    border-collapse: collapse;
    margin: auto;
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

<!-- EDIT FORM -->
<?php if(isset($row_post_by_id)) { ?>
<form method="post">
    <h3>Update Post</h3>
    Content:
    <input type="text" name="content" value="<?= $row_post_by_id['content'] ?>">
    <br><br>
    <button>Update</button>
</form>
<?php } ?>


<!-- TABLE -->
<table>
<tr>
    <th>ID</th>
    <th>user_id</th>
    <th>category_id</th>
    <th>title</th>
    <th>content</th>
    <th>created_at</th>
    <th>updated_at</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

<?php foreach($fetch_post as $row){ ?>
<tr>
    <td><?= $row[0] ?></td>
    <td><?= $row[1] ?></td>
    <td><?= $row[2] ?></td>
    <td><?= $row[3] ?></td>
    <td><?= $row[4] ?></td>
    <td><?= $row[5] ?></td>
    <td><?= $row[6] ?></td>

    <!-- EDIT -->
    <td>
        <a href="?id=<?= $row[0] ?>">edit</a>
    </td>

    <!-- DELETE -->
    <td>
       <a href="?delete=<?= $row[0] ?>">drop</a>
    </td>
</tr>
<?php } ?>
</table>

<hr><hr>