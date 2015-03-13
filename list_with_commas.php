<?php
echo "Hello" . PHP_EOL;
// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
 // TODO: Convert the string into an array

$physicistsArray = explode(', ', $physicistsString);

var_dump($physicistsArray);
function humanizedList($physicistsArray) {
	$lastPhysicist = array_pop($physicistsArray);
	var_dump($lastPhysicist);
	$newArrayPhysicists = implode(', ', $physicistsArray);
	$famousFakePhysicists = $newArrayPhysicists . ", and " . $lastPhysicist . PHP_EOL;
	echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}. " . PHP_EOL;
}
humanizedList($physicistsArray);




