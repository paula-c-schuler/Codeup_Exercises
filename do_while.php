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
	echo "$a \n";
} while ($a - 5 >= -10);

//Create a do-while loop that starts at 2, 
//and displays the result $a * $a on each line 
//while $a is less than 1,000,000. 
$a = 2;
do {
	$a *= $a;
	echo "$a \n";
} while ($a < 1000000);






