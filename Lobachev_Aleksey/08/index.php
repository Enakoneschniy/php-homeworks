<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lesson 3</title>
</head>
<body>
<div>Задание с картинки</div>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="firstname" placeholder="Имя">
    <input type="text" name="lastname" placeholder="Фамилия">
    <input type="submit" name="submit" value="Send">
</form>
<?php
const filename = 'test.txt';
$pattern = '/\d|\s/';
if($_POST['submit'] == 'Send'){
    if((!preg_match($pattern, $_POST['firstname']))&&(!preg_match($pattern, $_POST['lastname']))){
        echo "Вас зовут ".$_POST['firstname']."<br>";
        echo "Ваша фамилия ".$_POST['lastname']."<br>";
        $str=$_POST['firstname'].' '.$_POST['lastname']."\r\n";
        $src=fopen(filename, 'a');
        fputs($src, $str);
        fclose($src);
        echo $str;
        header("Location: index.php");
    }else{
        echo "Введите адекватные имя и фамилию<br>";
    }
}
echo(file_exists(filename))?"Файл есть":"Файла нет";
?>
<div>Задание с текстового файла</div>
<pre>
    Задание 1
    Выбрать числа с запятой или пробелом, в качестве разделителя разрядов.
    Задание 2
    Выбрать последовательность неповторяющихся символов в алфавитнои порядке.
    Задание 3
    Выбрать существующие даты между 1000 и 2012 годом. Секунды могут быть опущены.Автор облегчает задачу: в каждом месяце 30 дней.
</pre>
<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
    <input name="task" type="radio" value="first"> Задача 1
    <input name="task" type="radio" value="second"> Задача 2
    <input name="task" type="radio" value="third"> Задача 3
    <input type="text" name="inputReg" placeholder="Для проверки регулярки">
    <input type="submit" name="submitInp" value="Send">
</form>
<?php
const filenameInp = 'input.txt';
$patternFirst = '/^(\d{1,3})([, ]\d{3})*([.,]\d+)?$/';
$patternSecond = '/^a?\s*b?\s*c?\s*d?\s*e?\s*f?\s*g?\s*h?\s*i?\s*j?\s*k?\s*l?\s*m?\s*n?\s*o?\s*p?\s*q?\s*r?\s*s?\s*t?\s*u?\s*v?\s*w?\s*x?\s*y?\s*z?$/';
$patternThird ='/^(1\d{3}|20(0\d|1[0-2]))\/(0[1-9]|1[012])\/(0[1-9]|[12]\d|30) ([01]\d|2[0-3]):[0-5]\d(:([0-5]\d))?$/';
if($_POST['submitInp'] == 'Send'){
    if((isset($_POST['inputReg']))&&($_POST['task']=='first')){
        if(preg_match($patternFirst, $_POST['inputReg'])){
            echo "По задаче 1 есть совпадение";
        }else{
            echo "По задаче 1 нет совпадений";
        }
    }elseif($_POST['task']=='first'){
        $srcInp=fopen(filenameInp, 'r');
        $strInp=file_get_contents($srcInp);
        fclose($srcInp);
        if(preg_match($patternFirst, $strInp)){
            echo "По задаче 1 есть совпадение";
        }else{
            echo "По задаче 1 нет совпадений";
        }
    }
    if((isset($_POST['inputReg']))&&($_POST['task']=='second')){
        if(preg_match($patternSecond, $_POST['inputReg'])){
            echo "По задаче 2 есть совпадение";
        }else{
            echo "По задаче 2 нет совпадений";
        }
    }elseif($_POST['task']=='second'){
        $srcInp=fopen(filenameInp, 'r');
        $strInp=file_get_contents($srcInp);
        fclose($srcInp);
        if(preg_match($patternSecond, $strInp)){
            echo "По задаче 2 есть совпадение";
        }else{
            echo "По задаче 2 нет совпадений";
        }
    }
    if((isset($_POST['inputReg']))&&($_POST['task']=='third')){

        if(preg_match($patternThird, $_POST['inputReg'])){
            echo "По задаче 3 есть совпадение";
        }else{
            echo "По задаче 3 нет совпадений";
        }
    }elseif($_POST['task']=='third'){
        $srcInp=fopen(filenameInp, 'r');
        $strInp=file_get_contents($srcInp);
        fclose($srcInp);
        if(preg_match($patternThird, $strInp)){
            echo "По задаче 3 есть совпадение";
        }else{
            echo "По задаче 3 нет совпадений";
        }
    }
var_dump($_POST);
}
?>
</body>
</html>

