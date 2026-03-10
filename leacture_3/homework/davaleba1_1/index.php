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
    <form action="calculate.php" method="get">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="lastname" placeholder="lastname">
        <input type="text" name="position" placeholder="position">
        <input type="text" name="salary" placeholder="salary">
        <input type="radio" name="gadaxdistipi" value="piksirebuli" checked> piksrirebuli
        <input type="radio" name="gadaxdistipi" value="asarchevi" >tkventvis sasurveli
        <input type="number" name="asarchevi" placeholder="sheikvane %">
        <button>send information</button>

    </form>
</body>
</html>