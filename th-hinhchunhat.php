<?php 
	/**
	 * 
	 */
	class Rectangle
	{
		public $width;
		public $height;
		public function __construct($width, $height)
		{
			$this->width = $width;
			$this->height = $height;
		}
		public function getArea(){
			return $this->width * $this->height;
		}
		public function getPerimeter(){
			return ($this->width + $this->height)*2;
		}
	}
		$width = 20;
		$height = 10;
		$rectangle = new Rectangle($width, $height);
		echo "Chiều dài: $width <br>";
		echo "Chiều rộng: $height <br>";
		echo "Diện tích hình chữ nhật là: ".$rectangle->getArea();
		echo "<br> Chu vi hình chữ nhật là: ".$rectangle->getPerimeter();
?>