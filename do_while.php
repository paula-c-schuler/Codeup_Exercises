<?php

//count by 2s to 100
$a = 0;
do {
	$a += 2;
	echo "$a \n";
} while ($a + 2 <=100);


//alter loop to count by 5s backwards to -10
$a = 100;
do {
	$a -= 5;
	echo $a . PHP_EOL;
} while ($a - 5 >= -10);


//Create a do-while loop that starts at 2, 
//and displays the result $a * $a on each line 
//while $a is less than 1,000,000. 
$a = 2;
do {
	$a *= $a;
	echo "$a \n";
} while ($a < 1000000);


//EXTRA? -- DO FIZZ BUZZ with a While Loop; 
//Do FIZZ BUZZ with a Do-While Loop;
//start at 1 and count to 100
//If number is multiple of 3, then output "Fizz"
//If number is multiple of 5, then output "Buzz"
//If number is multiple of both, then output "FizzBuzz"
//If number is not evenly divisible by 3 or 5, output the number.

//***** NTS: In the wrong order, 
//***** the if statements will produce
//***** unacceptable results. Number 15 would populate as 5. 
//***** The most specific must be first, down to the most general.  

$a = 1;
while ($a <= 100){
	if ($a % 3 == 0 && $a % 5 == 0){
		echo "FizzBuzz" . PHP_EOL;
	}
	if ($a % 3 == 0){
		echo "Fizz" . PHP_EOL;
	}
	if ($a % 5 == 0){
		echo "Buzz" . PHP_EOL;
	} else 
	echo "$a" . PHP_EOL;
	$a++;
} 

$a = 1;
do {
	if ($a % 3 == 0 && $a % 5 == 0){
		echo "FizzBuzz" . PHP_EOL;
	}
	if ($a % 3 == 0){
		echo "Fizz" . PHP_EOL;
	}
	if ($a % 5 == 0){
		echo "Buzz" . PHP_EOL;
	} else 
	echo "$a" . PHP_EOL;
	$a++;
} while ($a <= 100);

