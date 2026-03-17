<?php
session_start();
if(!isset($_SESSION['kodi'])){
    $_SESSION['kodi'] = rand(10000, 999999);
}

$kodi = $_SESSION['kodi'];

if(isset($_POST['user_input'])){
    $input = $_POST['user_input'];

    if($input == $kodi){
        echo "სწორია!";
        $_SESSION['kodi'] = rand(10000, 999999); 
    } else {
        echo "არასწორია, კიდევ სცადე";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Code</title>
</head>
<body>
    <p><?php echo $_SESSION['kodi']  ?></p>

<form action="" method="post">
    <input type="text" name="user_input" placeholder="Enter your input">
    <button type="submit">Submit</button>
</form>



</body>
</html>