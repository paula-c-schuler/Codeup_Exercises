<?php

$x = 0;
$y = 5;
$z = 10;

if ($x < $y && $y < $z){
	echo "{$x} < {$y} < {$z}\n";
}
// echo is   0 < 5 < 10
if ($x > 0 || $x > 10){
	echo "{$x} is greater than 0 or {$x} is greater than 10\n";
}
// echo is    _________
if ($y > 0 || $y > 10){
	echo "{$y} > 0 or {$y} > 10\n";
}

// echo is   5 > 0 or 5 > 10
if ($z > 0 && $z < 10){
	echo "{$z} > 0 and {$z} < 10\n";
}

// echo is    ____________
if ($x > 0 && $x < 10){
	echo "{$x} > 0 and {$x} < 10\n";
}

// echo is   ________
if ($y > 0 && $y < 10){
	echo "{$y} > 0 and {$y} < 10\n";
}

// 5 > 0 and 5 < 10
if ($z > 0 && $z < 10){
	echo "{$z} > 0 and {$z} < 10\n";
}


