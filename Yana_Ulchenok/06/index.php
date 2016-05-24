<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homework06</title>
</head>
<body>

<form action="/01" method ="post">
    <p> <input type = "text" name="number" placeholder="Number"></p>

    <p><input type ="submit" name="submit" value="Result(factorial)"></p>
</form>

<?php
//task 1

function factorial($n){
    $min_res = 1;
    for ($i=1; $i<=$n; $i++){
        $result = $min_res * $i;
        return $result;
    }
}
echo factorial($_REQUEST['number'] == 'Result(factorial)');

echo "<hr>"; //task 2

function calendar(){
    $today = array(
        "year" => date(Y),
        "month" => date(n),
        "days" => date(t),
        "N" => date(N),);

    $startday = date(N, mktime(0, 0, 0, $today['month'], 1, $today['year']));

    echo "<table border=1><tr>";

    for ($day = 1; $day < $startday; $day++){
        echo "<td>"."*"."</td>";
    }
    for ($day = 1; $day <= $today['days']; $day++){
        echo "<td>".$day."</td>";
        if (date(N, mktime(0, 0, 0, $today['month'], $day, $today['year']))%7==0){
            echo "<tr></tr>";
        }
    }
    $endday = date(N, mktime(0, 0, 0, $today['month'], $today['days'], $today['year']));
    for ($day = $endday; $day < 7; $day++){
        echo "<td>"."*"."</td>";
    }
    echo "</table>";
}

echo calendar();

echo "<hr>"; //task3

function rand_array(){
    $length = 6;
    $minval = 2;
    $maxval = 12;
    for($i = 0; $i <= $length; $i++){
        $arr[] = rand ($minval, $maxval);
    }
    return $arr;
}
echo "<pre>";
var_dump(rand_array());

?>

</body>
</html>



