<?php 
	/**
	 * 
	 */
		const SLOW = 1;
		const MEDIUM = 2;
		const FAST = 3;
	class Fan 
	{

		private $speed;
		private $on ;
		private $radius;
		private $color;
		public function Fan()
		{
			$this->speed = SLOW;
			$this->on = false;
			$this->radius = 5;
			$this->color = "blue";
		}
		public function get_speed(){
			return $this->speed;
		}
		public function get_on(){
			return $this->on;
		}
		public function get_radius(){
			return $this->radius;
		}
		public function get_color(){
			return $this->color;
		}
		public function hienThi(){
			return $this->speed.$this->radius.$this->color;
		}
	}
	$fan = new Fan();
	if ($fan->get_on() === false) {
		echo "Quạt đang bật <br>";
		echo "Tốc độ: ".$fan->get_speed()."<br>";
		echo "Bán kính: ".$fan->get_radius()."<br>";
		echo "Màu: ".$fan->get_color()."<br>";
	}
	else {
		echo "Quạt đang tắt <br>";
		echo "Bán kính: ".$fan->get_radius()."<br>";
		echo "Màu: ".$fan->get_color()."<br>";

	}

?>