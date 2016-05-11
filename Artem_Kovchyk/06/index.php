<?php
	//Task 1
	function getFactorial($n) {

		$factorial = 1;

		for ($i = 1; $i <= $n; $i++) { 
			$factorial *= $i;
		}

		return $factorial;
	}

	/*echo getFactorial(5);*/

	//Task 2
	function showThisMonth() {
		$days = date('t');

		for ($i = 1; $i <= $days; $i++) { 
			$date = date("F ". $i." Y");
			echo $date . " " .date("l", mktime(0,0,0, date("m"), $i, date("Y"))) . "<br>";
		}
		
	}

	showThisMonth();

	//Task 3
	function createArray($length, $min, $max) {
		$array = [];

		for ($i = 0; $i <= $length; $i++) { 
			$array[] = rand($min, $max);
		}

		return $array;
	}

	foreach (createArray(10, 1, 10) as $key => $value) {
		echo $value . "<br>";
	}

	//Task 4
	function adjustArray($array, $percent) {

		if ($percent === 1) {
			return $array;
		} elseif ($percent < 0) {
			echo "The rate cannot be negative.";
			return;
		} else {

			for ($i = 0; $i < count($array); $i++) { 
				$item = $array[$i] * $percent;
				$array[$i] += $item;
			}
		}

		return $array;
	}

	$array = [45, 4, 7, 8, 1, 2, 4, 100];

	var_dump(adjustArray($array, 0.8));