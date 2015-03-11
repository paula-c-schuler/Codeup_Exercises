<?php
//************* FOR LOOP EXERCISES *************************
//Prompt user for a starting number and ending number, 
//then display all the numbers from the starting to ending using a for loop.

//Refactor to allow user to choose increment. (count by 1, 2, 10, ...)

//Default increment to 1 if no input.

//Make sure you are only allowing users to pass in numbers. 
//Give an error message if both passed arguments are not numeric.
//**********************************************************

//Get two numbers from user. Get them separately for clarity.
//***   No validator, very simple.  
//***   THIS WORKS
//Declare variables to represent user's argument inputs. 
// fwrite(STDOUT, "Please enter a beginning number. " . PHP_EOL);
// $startingNumber = trim(fgets(STDIN));

// fwrite(STDOUT, "Please enter an ending number. " . PHP_EOL);
// $endingNumber = trim(fgets(STDIN));

// //Display all numbers between the two numbers entered by the user. 
// for ($i = $startingNumber; $i <= $endingNumber; $i++){
// 	echo $i . PHP_EOL;
// } 


//Refactor to allow the user to choose an increment. 
//***    Offers user more control. 
//***    THIS WORKS
// fwrite(STDOUT, "Please enter a beginning number. " . PHP_EOL);
// $startingNumber = trim(fgets(STDIN));

// fwrite(STDOUT, "Please enter an ending number. " . PHP_EOL);
// $endingNumber = trim(fgets(STDIN));

// fwrite(STDOUT, "How would you like to count? By twos, fives, tens? " . PHP_EOL);
// $iteratorNumber = trim(fgets(STDIN));

// //Display all numbers between the two numbers entered by the user. 
// for ($i = $startingNumber; $i <= $endingNumber; $i += $iteratorNumber){
// 	echo $i . PHP_EOL;
// } 


//Default increment to 1 if no input.
**********  NOT WORKING YET *************if it the incrementor is bad data is the question. 

// fwrite(STDOUT, "Please enter a beginning number. " . PHP_EOL);
// $startingNumber = trim(fgets(STDIN));

// fwrite(STDOUT, "Please enter an ending number. " . PHP_EOL);
// $endingNumber = trim(fgets(STDIN));

// fwrite(STDOUT, "How would you like to count? By twos, fives, tens? " . PHP_EOL);
// $iteratorNumber = trim(fgets(STDIN));
// if (!is_numeric($iteratorNumber)){
// 	$iteratorNumber = 1;
// }

// //Display all numbers between the two numbers entered by the user. 
// for ($i = $startingNumber; $i <= $endingNumber; $i += $iteratorNumber){
// 	echo $i . PHP_EOL;
// } 

//Make sure you are only allowing users to pass in numbers. 
//Give an error message if both passed arguments are not numeric.
// ****    use do while for these three variables NOT WORKING YET 






