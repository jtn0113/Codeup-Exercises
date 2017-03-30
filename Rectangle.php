<?php 

	class Rectangle {

		public $width;
		public $height;
		public $area;

		public function calculateArea() {
			$this->area = ($this->width * $this->height);
			echo $this->area . PHP_EOL;
		}

		public function changeDimensions($w, $h) {
			$this->width = $w;
			$this->height = $h;
		}
	}





    // 5) Write a class of Rectangle:
    //     - write properties for width, height, area
    //     - write a method of calculateArea() that when called calculates the area and sets the value of the area property ** You will need to use $this **
    //     - write a method of changeDimensions($length1, $length2) which sets new values for the width and height
    //     - Instantiate a Rectangle object in oop_test.php and set width and height to 2 and 3.
    //     - Call and echo the results of calculateArea(). Call changeDimensions(4, 6), call calculateArea() and echo out the new area.