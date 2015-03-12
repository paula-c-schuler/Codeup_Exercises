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

// $a = 12;
// $b = 18;
// //Fill in the // Add code here blocks to make each function echo the proper result.
// function add($a, $b) 
// {
//     echo $a + $b . PHP_EOL;
// }

// function subtract($a, $b) 
// {
//     ECHO $a - $b . PHP_EOL;
// }

// function multiply($a, $b) 
// {
//     echo ($a * $b) . PHP_EOL;
// }

// function divide($a, $b) 
// {
//     echo $a / $b . PHP_EOL;
// }
//Add code after functions that calls each function with real numbers.
// add(5, 7);
// subtract( 5, 7);
// multiply(5, 7);
// divide(5, 7);
// PHP_EOL;
//Add a function modulus that finds the modulus of 2 numbers.
// function modulus($a, $b)
// {
// 	echo ($a % $b) . PHP_EOL;
// }
// PHP_EOL;
//Write test code to verify the function. 
//This was explained by Isaac to mean that we just add parameters to a function call to test. 
// modulus(5, 7);


//Create variables $a and $b at the top of your script and give them some value. 
//Watch what happens (or, does not happen) to your function output as you set 
//and modify $a & $b outside of your functions. 
//Think carefully about how this behavior differs from the way JavaScript handles variables.

//***************** SECTION TWO ******************
//Validate all the arguments, and display an error if the input is not numeric.
// $a = 101;
// $b = 99;

// function add($a, $b) 
// {
// 	if (is_numeric($a) && is_numeric($b)) {
//         echo $a + $b;
//     } else {
//         // echo "ERROR: Arguments must be numbers. Yours are {$a} and {$b}. \n";
//         freakOutYouHaveError($a, $b);
//     }
// }

// function subtract($a, $b) 
// {
// 	if (is_numeric($a) && is_numeric($b)) {
//         echo $a - $b;
//     } else {
//         echo "ERROR: Arguments must be numbers. Yours are {$a} and {$b}. \n";
//     }
// }

// function multiply($a, $b) 
// {
// 	if (is_numeric($a) && is_numeric($b)) {
//         echo $a + $b;
//     } else {
//         echo "ERROR: Arguments must be numbers. Yours are {$a} and {$b}. \n";
//     }
// }

// function divide($a, $b) 
// {	
// 	if ($b == 0){
// 		echo "Silly goose. You can't divide by zero. You need different data.\n";
// 	}
// 	else if (is_numeric($a) && is_numeric($b)) {
//         echo $a + $b;
//     } else {
//     	echo "ERROR: Arguments must be numbers. Yours are {$a} and {$b}. \n";
//     }
// }

// add(five, 7);
// subtract( 5, 7);
// multiply(5, 7);
// divide(5, 7);
// PHP_EOL;

// function modulus($a, $b)
// {
// 	echo ($a % $b) . PHP_EOL;
// }
// PHP_EOL;
// modulus(5, 7);  

//Validate divide by 0 errors, display error if attempts to divide by 0 are made.

//Make the error messages show the values of the arguments.

//Refactor the error messages into their own function, have the other functions use it for error messaging.
function freakOutYouHaveError ($a, $b)
{
	echo "ERROR: Arguments must be numbers. Yours are {$a} and {$b}. \n";
}
//************** SECTION THREE (RETURN) ****************
//Refactor each function to return the result, removing the echo.

//Validate divide by 0 errors, return false if divide by 0 is attempted.

function add($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        youHaveError($a, $b);
    }
}

function subtract($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
    	youHaveError($a, $b);
    }
}

function multiply($a, $b) 
{
	if (is_numeric($a) && is_numeric($b)) {
        echo $a * $b;
    } else {
    	youHaveError($a, $b);
    }
}

function divide($a, $b) 
{	
	if ($b == 0){
		return false;
	}
	else if (is_numeric($a) && is_numeric($b)) {
        return $a / $b;
    } else {
    	youHaveError($a, $b);
    }
}

add(five, 7);
subtract( 5, 7);
multiply(5, 7);
divide(5, 7);
modulus(5, 7);

function modulus($a, $b)
{
	if ($b == 0) {
		return false;
	}
	return ($a % $b);
}

function youHaveError ($a, $b)
{
	echo "ERROR: Arguments must be numbers. Yours are {$a} and {$b}. \n";
}
function youHaveZero ($a, $b)
{
	echo "You have a zero and you cannot divide by zero. ";
}
$message = divide(4, 0);
echo $message;


