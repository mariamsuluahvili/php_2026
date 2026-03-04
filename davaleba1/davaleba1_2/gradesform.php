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
    <form action="gradescalculate.php" method="POST">
       <input type="text" name="saxeli" id="name" placeholder="saxeli">
       <input type="text" name="gvari" id="lastname" placeholder="gvari">
       <input type="text" name="kursi" id="course" placeholder="kursi">
       <input type="text" name="semestri" id="semester" placeholder="semestri">
       <input type="text" name="qula" id="grade" placeholder="qula">
       <input type="text" name="sagani" id="subject" placeholder="sagani">
       <input type="text" name="saxeligvari" id="lecturer" placeholder=" lektoris saxeli da  gvari">
       <input type="text" name="saxeligvari_dek" id="dekan" placeholder=" dekanis saxeli da gvari">
       <button >inpormaciis gagzavna</button>
    </form>
</body>
</html>