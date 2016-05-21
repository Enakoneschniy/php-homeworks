<html>
<head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

<div class="row">
    <form class="col s12" method="POST" action="index.php">
        <div class="row">
            <div class="input-field col s12">
                <input placeholder="Input name " id="first_name" type="text" class="validate" name="first_name">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s12">
                <input id="last_name" type="text" class="validate">
                <label for="last_name">Last Name</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                <i class="material-icons right">send</i>
            </button>
        </div>
    </form>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $first_name=$_REQUEST['first_name'];
    $last_name=$_REQUEST['last_name'];

    $str=$first_name.' '.$last_name;

    $fileurl = 'save_my_form.txt';

    $fopen  =  fopen($fileurl, 'a+');
    fputs ($fopen, $str);
    fclose ($fopen);

    if ((file_exists($fileurl) and count(file($fileurl)))) {
        header("Location: " . $_SERVER["PHP_SELF"]);
        echo 'Данные успешно записаны!';
    } else {
        echo "Файл $fileurl не существует";
    }

    
}
echo '<hr>';
//РЕГУЛЯРНЫЕ ВЫРАЖЕНИЯ

//Task#1 Выделить тегом <strong> повторяющиеся слова.

$text = 'This is is test';
$text = preg_replace ('/is/ie',"\$counter++==2?'<strong>is</strong>':'\\0'",$text);
print $text;

echo '<hr>';

function validate($pattern,$array){

    foreach($array as $val){
        if (preg_match($pattern, $val)) {
            echo "$val - <font color='green'>Правильно </font><br>";
        }
        else
        {
            echo "$val - <font color='red'>Неправильно </font><br>";
        }
    }
}

//Task#2 Доменные имена для протоколов http и https, с необязательным слешем в конце. Специальые символы не используются.
validate("~^https?://(?:[a-z0-9](?:[-a-z0-9]*[a-z0-9])?\.)+[a-z](?:[-a-z0-9]*[a-z0-9])?\.?(?:$|/)~Di",['http://example.com/','example.com','кремль.рф']);

echo '<hr>';

//Task#3 Выбрать IPv4 адреса во всех возможных, представлениях: десятичном, шестнадцатеричном и восьмеричном. С точками и без.
/*validate('/^(?:(?:\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.){3}(?:0|[1-9]\d?|1\d\d|2[0-4]\d|25[0-5])$/',['99.198.122.146','0xFF.255.0377.0x12','256.256.256.256']);

echo '<hr>';*/

//Task#4 Выбрать последовательность неповторяющихся символов в алфавитнои порядке
validate("/^a?\s*b?\s*c?\s*d?\s*e?\s*f?\s*g?\s*h?\s*i?\s*j?\s*k?\s*l?\s*m?\s*n?\s*o?\s*p?\s*q?\s*r?\s*s?\s*t?\s*u?\s*v?\s*w?\s*x?\s*y?\s*z?$/",['abcdefghijk','abbc']);

echo '<hr>';


?>
