<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
           form{
         width: 400px;       
        margin: 50px auto;   
        padding: 10px;       
        text-align: center; 
        }
         input, button {
        width: 90%;          
        padding: 6px;
        margin-bottom: 10px; 
    }
    </style>
</head>
<body>
    <form action="grades.php" method="post">
        <input type="text" name="saxeli" placeholder="saxeli">
        <input type="text" name="gvari" placeholder="gvari">
        <input type="text" name="kursi" placeholder="kursi">
        <input type="text" name="semestri" placeholder="semestri">
        <input type="text" name="saswavlokursi" placeholder="saswavlokursi">
        <input type="text" name="qula" placeholder="qula">
        <input type="text" name="lektori" placeholder="lektori">
        <input type="text" name="dekani" placeholder="dekani">
        <button type="submit">send</button>
    </form>
</body>
</html>