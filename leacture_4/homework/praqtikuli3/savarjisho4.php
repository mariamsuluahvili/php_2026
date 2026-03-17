<?php
// პაროლის სიმძლავრის განსაზღვრა
function passwordStrength($password) {
    $length = strlen($password);
    $strength = 0;

    if ($length < 6) return "სუსტი";

    if ($length >= 6) $strength++;
    if (preg_match('/[a-z]/', $password)) $strength++;
    if (preg_match('/[A-Z]/', $password)) $strength++;
    if (preg_match('/[0-9]/', $password)) $strength++;
    if (preg_match('/[\W]/', $password)) $strength++;

    if ($strength <= 2) return "სუსტი";
    elseif ($strength <= 4) return "საშუალო";
    else return "მძლავრი";
}

$result = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'] ?? '';
    $result = passwordStrength($password);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Strength Checker</title>
</head>
<body>

<h2>შეიყვანეთ პაროლი</h2>

<form method="post">
    <input type="password" name="password" required>
    <input type="submit" value="შეამოწმე">
</form>

<?php
if ($result) {
    echo "<p>პაროლის სიმძლავრე: <b>$result</b></p>";
}
?>

</body>
</html>