<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 4</title>
   <style>
    table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 7px;
            text-align: center;
        }
   </style>
</head>
<body>
    <form method="post">
        <a href="form.php">HOME</a>
        <h1>PHP Form Validation Example</h1>
        Name: <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"> - *
        <br><br>
        E-mail:<input type="text" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
        <br><br>
        Website: <input type="text" name="website" value="<?php if(isset($_POST['website'])) echo $_POST['website']; ?>">
        <br><br>
        Comment: <textarea name="comment"><?php if(isset($_POST['comment'])) echo $_POST['comment']; ?></textarea>
        <br><br>
        Gender: <input type="radio" name="gender" value="Female">Female
                <input type="radio" name="gender" value="Male">Male
        <br><br>
        <input type="submit" name="submit-form">  
    </form>

    <div class="result">
        <?php
            if(isset($_POST['submit-form'])){
                if(empty($_POST['name']))
                {
                    echo "<p>Name is required</p>";
                }
                  if(strlen($_POST['name'])<2)
                {
                    echo "<p>name is not valid</p>";
                }
             
                if(empty($_POST['email']))
                {
                    echo "<p>E-mail is required</p>";
                }
                   if(!str_contains($_POST['email'], "@"))
                {
                    echo "<p>E-mail is not valid</p>";
                }
                if(empty($_POST['website']))
                {
                    echo "<p>Website is required</p>";
                }
                  if(empty($_POST['website']))
                {
                    echo "<p>Website is required</p>";
                }
                 if(empty($_POST['comment']))
                {
                    echo "<p>Comment is required</p>";
                }
                  if(empty($_POST['gender']))
                {
                    echo "<p>gender is required</p>";
                }

         else {  
            ?>
         <table>
            <tr>
                <th>Name</th>
                <th>E-mail</th>
                <th>Website</th>
                <th>Comment</th>
                <th>Gender</th>
            </tr>
            <tr>
                <td><?php echo $_POST['name']; ?></td>
                <td><?php echo $_POST['email']; ?></td>
                <td><?php echo $_POST['website']; ?></td>
                <td><?php echo $_POST['comment']; ?></td>
                <td><?php echo $_POST['gender']; ?></td>
            </tr>
         </table>

         <?php  } ?>

        <?php
            }
        ?>
    </div>
    <?php 

       
    ?>
</body>
</html>