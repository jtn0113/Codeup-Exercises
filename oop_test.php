<?php 
	require_once "Rectangle.php";

	$shape = new Rectangle();

	$shape->height = 2;
	$shape->width = 3;

	$shape->calculateArea();

	$shape->changeDimensions(10, 3);

	$shape->calculateArea();

// require_once "Pet.php";

// $maddie = new Pet();
// $maddie->species = "rat terrier";
// $maddie->weight = 25;
// $maddie->color = "black & white";
// $maddie->name = "Maddie";

// // $maddie->eat();
// // $maddie->move();
// // $maddie->sleep();
// $maddie->description();

// $tex = new Pet();
// $tex->species = "german shepherd";
// $tex->weight = 80;
// $tex->color = "black & brown";
// $tex->name = "Tex";

// $tex->description();

// $oreo = new Pet();
// $oreo->species = "cat";
// $oreo->weight = 10;
// $oreo->color = "black & white";
// $oreo->name = "Oreo";

// $oreo->description();

// require_once "Car.php";

// $newCar = new Car();
// $newCar->make = "Dodge";
// $newCar->model = "Ram";
// $newCar->color = "white";
// $newCar->miles = "50,000";
// $newCar->speed = "0";

// $newCar->turnOn();
// $newCar->honk();
// $newCar->accelerate();
// $newCar->accelerate();
// $newCar->accelerate();
// $newCar->accelerate();
// $newCar->description();