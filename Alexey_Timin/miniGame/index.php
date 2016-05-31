<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" id="form_id">
    <p><label for="number">введите любое число <br> от 1 до 3</label>
        <input type="text" name="number"><br><br><br>
        <input type="submit" value="вперед"></p>
</form>

</body>
</html>
<?php

$file = fopen('config.txt', 'r');
$file1 = fopen('config1.txt', 'r');
$baseHpPolice = fgets($file, 3);
$baseHpMafia = fgets($file1, 3);
$form = $_POST['number'];
$rand = rand(1, 3);
$randHp = rand(1, 4);

if ($form) {
    if($form > 3){
        echo '<h2>не жульничайте</h2>';
    }else
    if ($form == $rand) {
        if ($baseHpPolice <= 0) {
        }else
            $baseHpPolice = $baseHpPolice - $randHp;
        $config = fopen('config.txt', 'w+');
        $handle = fwrite($config, $baseHpPolice);
        fclose($config);


    } else {
        if ($baseHpMafia <= 0) {
        } else
            $baseHpMafia = $baseHpMafia - $randHp;
        $config = fopen('config1.txt', 'w+');
        $handle = fwrite($config, $baseHpMafia);
        fclose($config);


    }
} else echo '<h1>введите число</h1>' . '<br>';
if ($baseHpPolice <= 0) {
    $_SESSION['ваши жизни:'] =$baseHpPolice;
    $_SESSION['жизни мафии:'] = $baseHpMafia;

    $_SESSION['stop'] = 'вы проиграли';
    echo '<script type="text/javascript">
    window.location = "stop.php"
        </script>';
    
}
if ($baseHpMafia <= 0) {
    $_SESSION['ваши жизни:'] =$baseHpPolice;
    $_SESSION['жизни мафии:'] = $baseHpMafia;
    $_SESSION['stop'] = 'вы выиграли';
    echo '<script type="text/javascript">
    window.location = "stop.php"
        </script>';
}
echo 'следующий урон: ' . $randHp .'  hp'. '<br>'.'<br>';
echo 'ваши жизни  ' . $baseHpPolice . '<br>'.'<br>';
echo 'жизни мафии  ' . $baseHpMafia . '<br>'.'<br>';

echo 'данные из формы:' . $form . '<br>'.'<br>';
echo 'случайное число:' . $rand . '<br>'.'<br>';




?>