<?php
	$age = rand(1, 100);

	if ($age >= 18 && $age <= 59) {
		echo "Вам еще работать и работать";
	} elseif ($age > 59) {
		echo "Вам пора на пенсию";
	} elseif ($age >= 1 && $age <= 17) {
		echo "Вам еще рано работать";
	} else {
		echo "Неизвестный возраст"; // This condition will never execute because age is bigger than 59 (see condition 2), so I guess This a specification bug.
	}