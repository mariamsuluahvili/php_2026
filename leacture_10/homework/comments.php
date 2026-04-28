<?php
$connect = mysqli_connect("localhost", "root", "", "blog");

$posts = mysqli_query($connect, "SELECT * FROM posts");
$users = mysqli_query($connect, "SELECT * FROM users");


$select_query = "SELECT * FROM comments";
$result = mysqli_query($connect, $select_query);
$data = mysqli_fetch_all($result);


if(isset($_POST['comment']) && !empty($_POST['comment'])){
    $content = $_POST['comment'];  
    $post_id = $_POST['post_id'];
    $user_id = $_POST['user_id'];

    if(!empty($post_id) && !empty($user_id)){
        $insert_query = "INSERT INTO comments (content, post_id, user_id) 
                         VALUES ('$content', '$post_id', '$user_id')";
        mysqli_query($connect, $insert_query);

        header("location: comments.php");
        exit;
    } else {
        echo "ყველა ველი შეავსე!";
    }
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
    Comment: <input type="text" name="comment"><br><br>

    Post:
    <select name="post_id">
        <option value=""></option>
        <?php while($p = mysqli_fetch_assoc($posts)){ ?>
            <option value="<?= $p['id'] ?>">
                <?= $p['title'] ?>
            </option>
        <?php } ?>
    </select>

    <br><br>

    User:
    <select name="user_id">
        <option value=""></option>
        <?php while($u = mysqli_fetch_assoc($users)){ ?>
            <option value="<?= $u['id'] ?>">
                <?= $u['name'] ?>
            </option>
        <?php } ?>
    </select>

    <br><br>
    <button>Add Comment</button>
</form>

<hr><hr>


<table>
<tr>
    <th>ID</th>
    <th>Post ID</th>
    <th>User ID</th>
    <th>Content</th>
    <th>Created at</th>
</tr>

<?php foreach($data as $row){ ?>
<tr>
    <td><?= $row[0]?></td>
    <td><?= $row[1]?></td>
    <td><?= $row[2]?></td>
    <td><?= $row[3]?></td>
    <td><?= $row[4]?></td>
</tr>
<?php } ?>
</table>