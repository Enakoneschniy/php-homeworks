<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Заполните форму</h1>
<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
    <label for="fname">Имя</label>
    <input type="text" name="fname"><br>
    <label for="lname">Фамилия</label>
    <input type="text" name="lname"><br><br>
    <input type="submit" value="отправить">
    </form>
<?php
define("log","users.txt");
$hand = implode(" ",$_POST);
$fp = fopen('users.txt','w');
$test = fwrite($fp, $hand);
if($test) echo 'данные успешно занесены в файл';
else {echo 'ошибка при записи';}
fclose($fp);
echo '<pre>';
print_r($_POST);
echo '</pre>';
print_r("<br>".$hand);
?>
<p>Выделяем повторяющиеся слова</p>
<div class="login-form">

    <form method="post">
            <p>
                   <label for="form1">Введите текст:</label>
                    <textarea cols="40" rows="2" type="text" id="form1" name="form1" placeholder="Сюда"></textarea>
            </p>
            <p>
                   <input type="submit" name="submit" value="отправить">
               </p>
        </form>
    </div>

<?php
$a = $_REQUEST ["form1"];
$patterns =array("/( is){2,}/");
$c = array(" is");
$replace = array("$c[0]<strong>$c[0]</strong>");
$b = preg_replace($patterns,$replace,$a);
print_r ("$b");

?>
<p>Выбрать числа с запятой или пробелом, в качестве разделителя разрядов</p>
<div class="login-form">

    <form method="post">
        <p>
            <label for="form2">Введите текст:</label>
            <textarea cols="40" rows="2" type="text" id="form2" name="form2" placeholder="Сюда"></textarea>
        </p>
        <p>
            <input type="submit" name="submit" value="проверить">
        </p>
    </form>
</div>

<?php
$b = $_REQUEST ["form2"];
//$a = implode(',' ,$b);
$patterns = '/[0-9]+\.[0-9]+/';
echo '<pre>';

    if (preg_match($patterns, $b)) {
        echo 'есть дробные числа';
        print_r ('<br>'."$b");
    } else {
        echo 'нет дробных чисел';
        print_r ('<br>'."$b");
    }

echo "<hr>";
?>




</body>
</html>