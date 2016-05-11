<?php
	//Task 1
	function getSum($n) {
		$arr = [];
		$sum = 0;

		for ($i = 1; $i <= $n; $i++) {
			$arr[] = $i;
		}

		for ($i = 1; $i < count($arr); $i += 3) {
			$sum += $i;
		}

		return $sum;

	}

	/*echo getSum(11);*/

	//Task 2
	function createArray($n) {
		$arr = [];

		for ($i = 0; $i <= $n; $i++) {
			$arr[] = pow($i, 2);
		}

		return $arr;
	}

	createArray(10);

	//Task 3
	function fillInArray($n) {
		$arr = [];
		$isTrue = false;

		for ($i = 0; $i <= $n; $i++) {

			if (!$isTrue) {
				$arr[] = 0;
				$isTrue = true;
			} else {
				$arr[] = 1;
				$isTrue = false;
			}
		}

		return $arr;
	}

	// var_dump( fillInArray(10) );

	//Task 4
	function checkArrayForDoubleItems($array) {
		$item;

		for ($i = 0; $i < count($array); $i++) {
			$item = $array[$i];

			for ($j = $i + 1; $j < count($array); $j++) {
				if ($array[$j] == $item) {
					return true;
				}
			} 
		}
	}

	/*$array = [1, 2, 4, 4, 2, 5, "hello", 3, 4, 6, "hello"];*/

	/*echo checkArrayForDoubleItems($array);*/

	//Task 5
	function deleteDoubleItems($array) {
		$item;

		for ($i = 0; $i < count($array); $i++) {
			$item = $array[$i];

			for ($j = $i + 1; $j < count($array); $j++) {
				if ($array[$j] == $item) {
					array_splice($array, $j, 1);
				}
			} 
		}

		return $array;
	}

	/*var_dump( deleteDoubleItems($array) );*/

	//Task 6
	function addZeroAfterNegativeItem($array) {

		for ($i = 0; $i < count($array); $i++) { 

			if ($array[$i] < 0) {
				array_splice($array, $i + 1, 0, 0);
			}
		}

		return $array;
	}

	$array = [0, 5, 4, 9, 2, -4, -7, 5];

	/*var_dump( addZeroAfterNegativeItem($array) );*/

	//Task *
	function standartFunctionSortArray($array) {
		sort($array);
		return $array;
	}

	$array = [5, 4, 9, 7, "Kiev", 2, "Ankara", 11, 1];

	function sortArray($array) {
		$temp;

		for ($i = 0; $i < count($array); $i++) { 

			for ($j = $i; $j < count($array); $j++) { 
			
				if ($array[$i] > $array[$j]) {
					$temp = $array[$i];
					$array[$i] = $array[$j];
					$array[$j] = $temp;
				}
			}
		}

		return $array;
	}

	$arr = sortArray($array);

	foreach ($arr as $key => $value) {
		echo $value;
	}