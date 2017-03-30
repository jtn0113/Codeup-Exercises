<?php 

class Car {

	public $make;
	public $model;
	public $color;
	public $miles;
	public $speed;

	public function description() {
		echo "This car is a $this->make $this->model" . PHP_EOL;
	} 

	public function turnOn() {
		echo "VROOM" . PHP_EOL;
	}

	public function turnOff() {
		echo "...." . PHP_EOL;
	}

	public function brake() {
		echo $this->speed = 0 . PHP_EOL;
	}

	public function honk() {
		echo "BEEP BEEP" . PHP_EOL;
	}

	public function accelerate() {
		$this->speed ++;
		echo $this->speed . PHP_EOL;
	}
}




 ?>
