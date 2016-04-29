<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>Домашнее задание</title>
</head>
<body>

<?php
//Задание 1
$age=32;
echo " Мне $age года";
echo '<hr>';

?>
  <form action="" method="post">
    
    <p>
        <input type ="text" name="age" placeholder="Возраст">
    </p>
    <p>
        <input type ="submit" name="submit" value="send">
    </p>
  </form>

  <?php
  $age= null;
    if (isset ($_REQUEST['submit'])){
        $age = $_REQUEST['age'];
     if ($age>17 and $age<=59) {echo "Вам еще работать и работать  ";
     }elseif($age>1 and $age<=17){echo "Вам еще рано работать" ;
     }elseif($age>59){echo "Вам пора на пенсию" ;
     }else{echo "Неизвестный возраст" ;
     }

    }

?>
</head>
<body>