<?php
    $age = rand(0,100);
?>
<html>
  <head>
  <meta charset="UTF-8">
  <title>Homework 3</title>
  </head>
  <body>
  <?php
  echo "Указанный возраст: $age <br>";
  if (($age > 0) and ($age <= 17)) {
      echo "Вам еще равно работать!";
  } elseif (($age > 17) and ($age <= 59)) {
      echo "Вам еще работать и работать!";
  } elseif (($age > 59) and ($age <=100)) {
      echo "Вам пора на пенсию!";
  } else {
      echo "Возраст не определен.";
  }
  ?>
  </body>
</html>