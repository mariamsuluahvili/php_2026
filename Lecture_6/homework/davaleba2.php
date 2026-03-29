<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="davaleba2.php" method='POST'>
        <input type="text" name="user_text" placeholder="sheikvane teksti">
        <button name='subbmit'>send</button>
    </form>
</body>
</html>
<?php 
if(isset($_POST['subbmit'])){
    $content=$_POST['user_text'];
  if(empty($content)){
    echo "ველი არ უნდა იყოს ცარიელი";
  }
  else {
$file="homeworkfiles/user.txt";
$fc=fopen($file,'w');
$fw=fwrite($fc,$content);
fclose($fc);
$fo=fopen($file,'r');
$fr=fread($fo,filesize($file));
echo $fr;
fclose($fo);


  }
}
?>