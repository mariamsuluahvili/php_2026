<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <style>
            body{
                background-color: #56dac8;
            }
        form{
        margin-left: 500px ;         
        }
        button{
           background-color: #239283;
        }
     
        
    </style>
</head>
<body>
    <form action="correctanswer.php" method="post">
    
<p> რომელი არის პროგრამირების ენა?</p>
<input type="radio" name="q1" value="a"> Chrome <br>
<input type="radio" name="q1" value="b"> PHP <br>
<input type="radio" name="q1" value="c"> Word <br>
<input type="radio" name="q1" value="d"> Paint <br>

<p> HTML გამოიყენება:</p>
<input type="radio" name="q2" value="a"> ვებსაიტის სტრუქტურისთვის <br>
<input type="radio" name="q2" value="b"> თამაშებისთვის <br>
<input type="radio" name="q2" value="c"> ოპერაციული სისტემისთვის <br>
<input type="radio" name="q2" value="d"> ანტივირუსისთვის <br>

<p> რომელი არის მონაცემთა ბაზა?</p>
<input type="radio" name="q3" value="a"> CSS <br>
<input type="radio" name="q3" value="b"> HTML <br>
<input type="radio" name="q3" value="c"> JavaScript <br>
<input type="radio" name="q3" value="d"> MySQL <br>

<p>  კომპიუტერის მთავარი "ტვინი":</p>
<input type="text" name="q4"><br><br>

<p> რა ეწოდება მოწყობილობას რომლითაც შეგვყავს კომპიუტერეში ინფორმაცია</p>
<input type="text" name="q5"><br><br>

<button>შემოწმება</button>

    </form>

</body>
</html>