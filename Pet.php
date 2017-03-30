<?php 

class Pet {

	public $species;
	public $weight;
	public $color;
	public $name;

	public function description() {
		echo "$this->name is a $this->weight pound $this->color $this->species." . PHP_EOL; 
	}

	public function eat() {
		echo $this->name . "'s weight is now " . ($this->weight+1) . PHP_EOL;
	}

	public function move() {
		echo $this->name . "'s weight is now " . ($this->weight-1) . PHP_EOL;
	}

	public function sleep() {
		echo "$this->name is tired." . PHP_EOL;
	}

}





