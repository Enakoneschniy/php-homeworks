<!DOCTYPE html>
<html>
 <head>
    <meta charset="UTF-8">
    <title>Домашка 2</title>
 </head>
  <body>
    <h3>Задача 1</h3>
  <?php
 $name ="Viktoriya";
 $age = 18;
 echo "<p>Меня зовут $name. </p>";
 echo "<p>Мой возраст $age.</p>";
  ?>
 <hr>
    <h3>Задача 2. Вариант 1</h3>
 <?php
  echo "<p>Вывод результата вычисления площади равностороннего треугольника по формуле S=1/4*a*&#8730 3</p>";
  $a = 5;
  $b = 3;
  $c = sqrt($b);
  $d = 1/4*$a*$c;
  echo $d;
 ?>
 <hr>
  <h3>Задача 2. Вариант 2</h3>
 <?php
 echo "<p>Вывод результата вычисления площади равностороннего треугольника по формуле S=1/4*a*&#8730 3</p>";
 $e = 1/4*$a*sqrt(3);
 echo ceil ($e);
  ?>
  <hr>
  </body>
</html>
