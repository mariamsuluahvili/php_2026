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
    <form action="salarycalculate.php" method="GET" >
        <input type="text" name="saxeli" id="saxeli" placeholder="saxeli">
        <input type="text" name="gvari" id="gvari" placeholder="gvari">
        <input type="text" name="tanamdeboba" id="tanamdeboba" placeholder="tanamdeboba">
        <input type="text" name="anazghaureba" id="anazghaureba" placeholder="anazghaureba">
        <input type="radio" name="gadaxdistipi" id="piksirebuli" value="piksirebuli" checked> piksrirebuli
        <input type="radio" name="gadaxdistipi" value="asarchevi" >tkventvis sasurveli
        <input type="number" name="asarchevi" placeholder="sheikvane %">
        <button>send information</button>

</form>
</body>
</html>