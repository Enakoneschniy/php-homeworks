
<style type="text/css">

    .color {
        text-align: center; /* Выравнивание по центру */
        color: red; /* Поля вокруг текста */
    }

</style>

<?php

echo '1. Разработать функцию вычисления факториала заданного числа (n!)Исходные данные, передаваемые в функцию: n - число, факториал которого вычисляется.На выходе получить результат в виде факториала числа';

function fact($n)
{
    if ($n==0) return 1;
    else
        return $fact = $n * fact($n-1);
}

print ' <form  method="POST">
        <p>Факториал числа :<input  type="number" size="5" name="n" min="1" max="10" value="'.$_POST["n"].'"> = <input type="text" name="resultat"  value="'.fact($_POST["n"]).'"><input type="submit" name="resultat"  value="result"></p>
        </form>';

echo '<hr>';

echo '2. Написать функцию, которая будет выводить данные в календарном формате на текущий месяц. Возможно использование стандартных функций определения дней недели<br>';

function month_calendar(){

    $dayofmonth = date('t');
    $day_count = 1;
    $num = 0;
    for($i = 0; $i < 7; $i++)
    {
        $dayofweek = date('w',mktime(0, 0, 0, date('m'), $day_count, date('Y')));
        $dayofweek = $dayofweek - 1;
        if($dayofweek == -1) $dayofweek = 6;
        if($dayofweek == $i)
        {
            $week[$num][$i] = $day_count;
            $day_count++;
        }
        else
        {
            $week[$num][$i] = "";
        }
    }

    while(true)
    {
        $num++;
        for($i = 0; $i < 7; $i++)
        {
            $week[$num][$i] = $day_count;
            $day_count++;
            if($day_count > $dayofmonth) break;
        }
        if($day_count > $dayofmonth) break;
    }
    echo "<table border=1>";
    echo "<tr><td>Пн</td><td>Вт</td><td>Ср</td><td>Чт</td><td>Пт</td><td class='color'>Сб</td><td class='color'>Вс</td></tr>";
    for($i = 0; $i < count($week); $i++)
    {
        echo "<tr>";
        for($j = 0; $j < 7; $j++)
        {
            if(!empty($week[$i][$j]))
            {
                if($j == 5 || $j == 6)
                    echo "<td class='color'>".$week[$i][$j]."</td>";
                else 
                    echo "<td>".$week[$i][$j]."</td>";
            }
            else 
                echo "<td>&nbsp;</td>";
        }
        echo "</tr>";
    }

    echo "</table>";

}

month_calendar();

echo '<hr>';

echo '3. Написать функцию для генерации массива случайных часел. Функция принимает длину массива, максимальное и минимальное значение в массиве. Функция должна вернуть массив<br>';

function rand_array($len,$minval,$maxval) {

    for ($i=0;$i<=$len;$i++){
        $arrayres[] = rand($minval,$maxval);
    }

    return $arrayres;

}

print_r(rand_array(5,5,10));

echo '<hr>';

echo '4. процентная коррекция от элементов массива<br>';

print ' <form  method="POST">
        <p>Процент :<input  type="number" name="p" value="'.$_POST["p"].'"><input type="submit" name="result"  value="result"></p>
        </form>';


$array = [5, 6.5, 7.2, 450, 0.8, 45, 5.98];
echo 'Массив до: ';
print_r($array);
echo '<br>';

function percentage_of_the_value($array,$percent){

    if ($percent<0){
       return 'Error: процент не может быть отрицательным!';
    }
      for ($i=0;$i<=count($array);$i++){
        $arrayres[] =  $array[$i]*$percent/100;

    }

    return $arrayres;

}

echo 'Массив после: ';
print_r(percentage_of_the_value($array,$_POST["p"]));



?>
