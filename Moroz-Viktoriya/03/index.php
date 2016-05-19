<!doctype html>
 <html lang="">
 <head>
    <meta charset="UTF-8">
    <title>Задание 3</title>
 </head>
 <body>
    <form action="" method="post">
     <p>
    <input type="text" name ="age" placeholder="Возраст">
    </p>
     <p>
      <input type="submit" name="submit" value="Отправить">
     </p>
      <?php
        if (isset($_POST ['submit'])){
            $age = $_POST ['age'];
        }
        if (($age > 0 &&  $age <= 17)){
            echo 'Вам еще рано работать';
        }elseif ($age >= 18 && $age <= 59){
            echo 'Вам еще работать и работать';
        }elseif (($age >= 60 && $age <= 110)) {
            echo 'Вам пора на пенсию';
        }else {
            echo 'Неизвестный возраст';
        }
      ?>
 </body>
 </html>