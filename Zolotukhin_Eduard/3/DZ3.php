<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="" method="POST">
    <p> Введите Ваш возраст </p>
        <p>
               <input type="text" name="age" placeholder="*******">
        </p>
        <p>
                <input type="submit" name="submit" value="enter">
        </p>
    <p>
        <input type="submit" name="submit" value="cleen">
    </p>
    </form>
<?php
if(isset($_REQUEST['submit'])){
       $age = $_REQUEST['age'];
        if(is_numeric($age)) {
                if ($age >= 1 && $age <= 17) {
                       echo "Вам еще рано работать";
         }
                elseif ($age >= 18 && $age <= 59) {
                        echo "Вам еще работать и работать";
         }
                elseif ($age > 59 && $age <=99) {
                       echo "Вам пора на пенсию";
         }
            elseif ($age >= 100) {
                        echo "Вам уже поздно работать!";
         }
     }
     }

  ?>
</body>
</html>
