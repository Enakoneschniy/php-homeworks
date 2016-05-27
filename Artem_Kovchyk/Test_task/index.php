<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Test task</title>
	</head>
	<style type="text/css">

	</style>
	<body>
		<?php
			$array = [    
				[ 
					'text'    => 'Текст красного цвета', 
					'cells'   => '1,2,4,5', 
					'align'   => 'center', 
					'valign'  => 'center', 
					'color'   => 'FF0000', 
					'bgcolor' => '0000FF'
				],
				[ 
					'text'    => 'Текстзеленогоцвета', 
					'cells'   => '8,9', 
					'align'   => 'right', 
					'valign'  => 'bottom', 
					'color'   => '00FF00', 
					'bgcolor' => 'FFFFFF'
				]
			];

			showField($array);
		?>
	</body>
</html>
<?php

	function getCells($array) {
		$arCells = [];

		for ($i = 0; $i < count($array); $i++) { 
			$arCells[] = explode(",", $array[$i]['cells']);
		}

		return $arCells;
	}

	function showField($array) {

		$arField = [
			[1, 2, 3],
			[4, 5, 6],
			[7, 8, 9]
		];

		$table = "";
		/*$arCells = getCells($array);*/
		$arCells = [1, 2, 4, 5];

		for ($i = 0; $i < count($arField); $i++) {
			$row = "";

			for ($j = 0; $j < count($arField[$i]); $j++) {

				$row .= "<td id='".$arField[$i][$j]."'></td>";
			}

			$table .= "<tr>$row</tr>";
		}

		echo "<table callpadding='0' cellspacing='0' border='1' width='600px' height='600px'>$table</table>";
	
	}
?>