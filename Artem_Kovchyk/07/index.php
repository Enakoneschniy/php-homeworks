<?php
	//Task 1
	function showNumbers($n) {
		
		if ($n < 1) {
			return;
		}

		showNumbers($n - 1);
		echo $n . "<br>";
	}

	/*showNumbers(15);*/

	//Task 2
	function showNumbersBetween($a, $b) {
		
		if ($a === $b) {

			echo $b;
			return;

		} elseif ($a <= $b) {

			echo $a . "<br>";
			showNumbersBetween(++$a, $b);

		} else {

			echo $a . "<br>";
			showNumbersBetween(--$a, $b);	
			
		}

	}

	/*showNumbersBetween(7, 11);*/

	//Task 3
	function checkNumber($n) {

		if ($n == 0) {

		}
	}