<?php
	/**
	 * 
	 */
	class QuadraticEquation
	{
		public $a;
		public $b;
		public $c;
		
		function __construct($a, $b, $c)
		{
			$this->a = $a;
			$this->b = $b;
			$this->c = $c;
		}
		public function getDiscriminant(){
			return ($this->b*$this->b)-(4*$this->a*$this->c);
		}
		public function getRoot1(){
			return  (-$this->b + sqrt($this->getDiscriminant()))/(2*$this->a); 
		}
		public function getRoot2(){
			return	 (-$this->b - sqrt($this->getDiscriminant()))/(2*$this->a);
		}
	}
	$a = 1;
	$b = 2;
	$c = 1;
	$quadraticequation = new QuadraticEquation($a, $b, $c);
	echo "Delta = ".$quadraticequation->getDiscriminant()."<br>";
	if ($quadraticequation->getDiscriminant() >=0 ) {
		echo "Nghiệm x1 = ".$quadraticequation->getRoot1();
		echo "<br>";
		echo "Nghiệm x2 = ".$quadraticequation->getRoot2();
	}
	else echo "Phương trình vô nghiệm <br>";
?>