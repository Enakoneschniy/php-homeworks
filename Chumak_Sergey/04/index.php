<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Таблица умножения</title>
</head>
<body bgcolor="white">





<table border="2"  cellpadding="15">
<p align="justify"><h1>Таблица умножения</h1></p>

<?php
$cols = 10;
$rows = 10;
for ($a=1; $a<=10; $a++) {
    echo  "<tr>";
     for ($b=1; $b<=10; $b++) {
            if ($b==1 or $a==1) {
                echo "<th style='background-color:aqua'>",$a * $b;
                } else {
                    echo "<td>",$a * $b;
                    }
        }
    echo "</td>";   
}
?>


</table>

</body>
</html>
<p align="justify"><h1>Нечетные числа от 1 до 50 </h1></p>
<?php
$i=0;
   for($i=0;$i<50;$i++){
        if($i%2!==0){
            echo "<b> $i <br>";
        }
    }
?>