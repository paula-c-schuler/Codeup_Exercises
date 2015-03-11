<?php

for ($i = 99; $i >= 0; $i -= 1){
	if ($i > 1){
		$next = $i - 1;
		echo "$i bottles of milk on the wall, $i bottles of milk." . PHP_EOL;
		echo "Take 1 down, pass it around, $next bottles of milk on the wall. " . PHP_EOL;
	} else if ($i == 1){
		echo "$i bottle of milk on the wall, $i bottle of milk." . PHP_EOL;
		echo "Take 1 down, pass it around, ain't no more bottles of milk on the wall. " . PHP_EOL;
	} else if ($i == 0){
		echo "No more bottles of milk on the wall, no more bottles of milk, " . PHP_EOL;
		"Go to the store and buy some more, 99 bottles of milk on the wall. " . PHP_EOL;
	}
} 