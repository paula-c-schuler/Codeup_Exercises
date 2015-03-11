<?php
//Do FIZZ BUZZ with a While Loop; 
//Do FIZZ BUZZ with a Do-While Loop;
//Do FIZZ BUZZ with a For Loop;
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


for (i = 0; i <= 100; i++){
	if ($i % 3 == 0 && $i % 5 == 0){
		echo "FizzBuzz " . PHP_EOL;
	} elseif ($i % 3 == 0){
		echo "Fizz " . PHP_EOL;
	} elseif ($i % 5 == 0){
		echo "Buzz " . PHP_EOL;
	} else {
		echo $i . PHP_EOL;
	}
}






