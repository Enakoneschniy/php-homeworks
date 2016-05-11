<?php

$age = 0;
if ($age >= 18 and $age <= 59) {
    echo 'Вам еще работать и работать';
}
elseif ($age >=1 and $age <= 17){
    echo 'Вам еще рано работать';
}
elseif ($age > 59) {
    echo 'Вам пора на пенсию';
}
else {
    echo 'Неизвестный возраст';
}