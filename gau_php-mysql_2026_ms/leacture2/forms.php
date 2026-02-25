<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            width: 400px;
            margin: 20px auto;
            border: solid 1px black;
            padding: 10px;
        }
    </style>
</head>
<body>

 
    <form action="worker.php" method="get">
        <input type="text" placeholder="name" name="saxeli">
        <br><br>
        <input type="text" placeholder="subject" name="sagani">
        <br><br>
        <button type="submit">send information (GET)</button>
    </form>
    
    <hr><hr>

  
    <form action="worker.php" method="post">
        <input type="text" placeholder="name" name="saxeli">
        <br><br>
        <input type="text" placeholder="subject" name="sagani">
        <br><br>
        <button type="submit">send information (POST)</button>
    </form>  

</body>
</html>