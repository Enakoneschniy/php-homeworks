<?
echo "Задача №1. Создать переменную $name и присвоить ей строковое значение содержащее Ваше имя. Создать переменную $age и присвоить ей числовое значение содержащее Ваш возраст.Вывести с помощью echo или print фразу “Меня зовут ваше_имя”, например “Меня зовут Евгений”.<br>";
$name = 'Ruslan Gorzhiy';
echo "Ответ: My name is $name<br>";
echo '<hr>';

$date_dob = new DateTime('09.11.1987');
$current_date = new DateTime();
$interval = $current_date->diff($date_dob);
$age = $interval->format("%Y");
$str_date_dob = $date_dob->format('Y-m-d');
echo "Ответ: Дата рождения: $str_date_dob (Мне $age лет)";
 
 echo '<hr><br>';
 
echo "Задача №2. Вычислить площадь равностороннего треугольника по формуле S=1/4*a*(Корень из трех) , где а- сторона треугольника.<br>";
$a = 4;
$s = 1/4*$a*sqrt(3);
echo "Ответ: a=$a; S=1/4*$a*&radic;3=$s";

echo "<hr><br>";

echo "Задача №3. Условия<br>";
$if = "1. a+b/c*a a&lt;c<br>2. x=100 a=a<br>3. c*3*b+c/c*&radic;c a&gt;c";
echo $if;

$if_1 = "a+b/c*a";
$if_2 = "x=100";
$if_3 = "c*3*b+c/c*&radic;c";
print '<form action="" method="post">
		<p>Значение а: <input type="text" name="a" style="width:20px" value="'.$_POST['a'].'"/></p>
		<p>Значение с: <input type="text" name="c" style="width:20px" value="'.$_POST['c'].'"/></p>
		<input type="submit" name="submit" value="calculate" />
		</form>';
		
if($_POST) {echo 'result: ';		
			
	if ($_POST['a'] < $_POST['c']) {
		 echo $if_1;
	} elseif ($_POST['a'] == $_POST['c']) {
		 echo $if_2;
	} elseif ($_POST['a'] > $_POST['c']) {
		 echo $if_3;
	}		
}
