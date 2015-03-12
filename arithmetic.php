<?php
//************ EXERCISES WITH ARITHMETIC *************
//Fill in the // Add code here blocks to make each function echo the proper result.
// function add($a, $b) {
//     echo $a + $b;
// }

// function subtract($a, $b) {
//     // Add code here
// }

// function multiply($a, $b) {
//     // Add code here
// }

// function divide($a, $b) {
//     // Add code here
// }

$a = 12;
$b = 18;
//Fill in the // Add code here blocks to make each function echo the proper result.
function add($a, $b) 
{
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) 
{
    ECHO $a - $b . PHP_EOL;
}

function multiply($a, $b) 
{
    echo ($a * $b) . PHP_EOL;
}

function divide($a, $b) 
{
    echo $a / $b . PHP_EOL;
}
//Add code after functions that calls each function with real numbers.
add(5, 7);
subtract( 5, 7);
multiply(5, 7);
divide(5, 7);
PHP_EOL;
//Add a function modulus that finds the modulus of 2 numbers.
function modulus($a, $b)
{
	echo ($a % $b) . PHP_EOL;
}
PHP_EOL;
//Write test code to verify the function. 
//This was explained by Isaac to mean that we just add parameters to a function call to test. 
modulus(5, 7);


//Create variables $a and $b at the top of your script and give them some value. 
//Watch what happens (or, does not happen) to your function output as you set 
//and modify $a & $b outside of your functions. 
//Think carefully about how this behavior differs from the way JavaScript handles variables.

?>