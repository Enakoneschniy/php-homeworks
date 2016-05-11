<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Homework 4</title>
	<!--Task 3 -->
	<style type="text/css">
		.field {
			border: 1px solid black;
		}
		.first, span:first-child {
			text-align: center;
			background-color: #ccc;
			font-weight: bold;
		}
		.multiplication {
			width: 50px;
			height: 50px;
			display: inline-block;
			border-right: 1px solid black;
			border-bottom: 1px solid black;
		}
	</style>
</head>
<body>
<?php
	//Task 1
	$cols = rand(1, 10);
	$rows = rand(1, 10);

	function createArray($cols, $rows) {
		$array = [];

		for ($i = 1; $i < $cols; $i++) {
			$arr = [];
			for ($j = 1; $j < $rows; $j++) {
				$result = $j * $i;
				array_push($arr, $result);
			}

			array_push($array, $arr);
		}

		return $array;
	}

	$array = createArray($cols, $rows);

	function showTable($array) {

		for ($i = 0; $i < count($array); $i++) { 
			$res = "";

			for ($j = 0; $j < count($array[$i]); $j++) { 
				if ($i < 1) {
					$res .= "<span class='multiplication first'>". $array[$i][$j] ."</span>";
				}
				else {
					$res .= "<span class='multiplication'>". $array[$i][$j] ."</span>";	
				}
			}
			echo "<div>$res</div>";
		}
	}
	//Task 2 (See task 3 in styles css)
	showTable($array);

	//Task 4

	for ($i = 1; $i <= 50; $i++) {
		if ($i%2 != 0) {
			echo "$i</br>";

		}
	}
?>
</body>
</html>

