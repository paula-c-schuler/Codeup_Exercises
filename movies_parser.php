<?php
/* READS A FILE, SORTS DATA AND WRITES IT TO A NEW FILE **
 * ALSO RANDOMIZES A SELECTED MOVIE FROM THE DATA FOR USER **
/* THIS IS COMPLETE **
/*
* Identify data import and export files.
*/
$inputFile  = 'data/movies.txt';
$outputFile = 'sorted_movies.txt';

/**
 * Read in a file, get the string
 * return contents as an array
 **/
function readLines($inputFile) {
	$handle = fopen($inputFile, 'r');
	$contentsString = trim(fread($handle, filesize($inputFile)));
	$contentsArray = explode("\n", $contentsString);
	// print_r($contents);
	fclose($handle);
	return $contentsArray;
}

/**
 * Write contents of an array to a file
 **/
function writeLines($outputFile, $moviesArray) {
	$moviesString = implode("\n", $moviesArray);
	$handle = fopen($outputFile, 'a+');
	$writtenMovies = fwrite($handle, PHP_EOL . $moviesString);
	fclose($handle);
}

/**
 * Pick a random movie from an array
 */
function randomMovie($moviesArray) {
	$randomNum = array_rand($moviesArray, 1);	
	foreach ($moviesArray as $key => $movie) {
		$movie = $moviesArray[$randomNum];
		$randomMovie = $movie;
	}
	return $randomMovie;
}

$moviesArray = readLines($inputFile);
$randomMovie = randomMovie($moviesArray);

echo "Let's watch " . $randomMovie . "!\n";
echo "But " . $randomMovie . " really sucks!\n";

sort($moviesArray);

writeLines($outputFile, $moviesArray);
