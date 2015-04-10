<?php 
// EXERCISE 9.2.1   TESTING FILE FOR CLASS FILES
// Each test will require a new object with specific parameter integers passed. 
// Echo the results in English. 

// Populate the classes
require_once 'rectangle.php';
require_once 'square.php';

$rectangle = new rectangle(8.5, 11);
$area = $rectangle->area();
echo "The area of this shape is $area" . PHP_EOL;

// same for squares
$square = new Square(4,4);
echo "The area of a four inch square is " . $square->area() . " inches" . PHP_EOL;
echo "The perimeter of this square is " . $square->perimeter() . PHP_EOL;

// 
$square2 = new Square(3,3);
echo "The area of a three inch square is " . $square2->area() . " inches: . PHP_EOL";
echo "The perimeter of this square is " . $square2->perimeter() . PHP_EOL;

 ?>