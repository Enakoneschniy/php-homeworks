<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .select {
            background-color: aquamarine;
            font-weight: bold;
            text-align: center;
            vertical-align: center;
        }
    </style>
</head>
<body>
<?php
/*Task1*/
$cols = rand(5, 15);
$raws = rand(5, 15);
/*Task2+3*/
echo "Столбцов $cols Строк $raws";
echo "<table border=\"1\">";
for($i=1;$i<=$raws;$i++)
    {
    echo "<tr>";
    for($j=1;$j<=$cols;$j++)
        {
        $a=$i*$j;
        if($i==1 || $j==1)
        {echo "<td class=\"select\">$a</td>";
        }else {echo "<td>$a</td>";}
        }
    echo "</tr>";
    }
echo "</table>";
/*Task4*/
for($i=1;$i<=50;$i++)
{echo $i%2==0 ? "" : $i."<br>";}
?>
</body>
</html>