<?php
//Create a for loop that shows all even numbers between 1 and 100 using continue.
for ($i = 0; $i <= 100; $i += 2){
	echo $i . PHP_EOL;
}
//Create another for loop that counts from 1 to 100, but stops after 10 using break.
for ($i = 0; $i <= 100; $i++){
	echo $i . PHP_EOL;
	if ($i == 10){
		break;
	}
}


