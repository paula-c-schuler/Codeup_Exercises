<?php 
// EXERCISE 9.2.3 Visibility --- WITH NOTES TO SELF FOR STUDY 

// Create objects from both classes (rectangle-more-exercises.php and square-more-exercises.php)
// And run the area() function.

// Populate the classes
require_once 'Rectanglemoreexercises.php';
require_once 'Squaremoreexercises.php';

// Must pass variables to the new class for the construct function
$Rectangleinstance = new Rectanglemoreexercises(3, 9);

$Squareinstance = new Squaremoreexercises(3);

echo $Rectangleinstance->area();

echo $Squareinstance->area();

