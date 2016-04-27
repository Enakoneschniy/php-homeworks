<?php
	//Task 1
	$name = "Artem";
	$age = 30;
	echo "My name is $name <br/> My age is $age <br/>";

	//Task 2
	$s = 0;
	$a = 15;

	$s = round( (pow($a, 2) * sqrt(3) / 4), 2);

	echo "$s <br/>";

	//Task 3
	//Option 1
	//This option implements a solution via function
	function findX($a, $b, $c) {
		$x = 0;

		if ($a < $c) {
			$x = $a + $b / $c * $a;
		} else if ($a > $c) {
			$x = $c * 3 * $b + $c / $c * sqrt($c);
		} else {
			$x = 100;
		}

		echo $x;
	}
	
	findX(3, 5, 4);

	//Option 2
	//This is my another attempt using OOP approach))) I even don't know whether this is helpful in this case)))
	class Calculator {
		private $_x = 0;
		private $_a;
		private $_b;
		private $_c;

		function __construct($a, $b, $c) {
			$this->_a = $a;
			$this->_b = $b;
			$this->_c = $c;
		}

		private function findX() {

			if ($this->_a < $this->_c) {
				$this->_x = $this->_a + $this->_b / $this->_c * $this->_a;
			} else if ($this->_a > $this->_c) {
				$this->_x = $this->_c * 3 * $this->_b + $this->_c / $this->_c * sqrt($this->_c);
			} else {
				$this->_x = 100;
			}

			return $this->_x;
		}

		public function getX() {
			return $this->findX();
		}
	}

	$calculator = new Calculator(3, 5, 4);

	echo $calculator->getX();
?>