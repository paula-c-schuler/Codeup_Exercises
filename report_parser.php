<?php
// Output should be ordered by units in descending order
// Column headers should appear in the following format
// Office Name | Date | Report Name
// Total Units | Full Name | Employee Number
// First character of items under first character of header
// source file is 'data/report.txt'


// NOTES TO SELF: 
// get access to the data in a usable manner
$filename = '/vagrant/exercises/data/report.txt';
$handle = fopen($filename, 'r');
$contents = fread($handle, filesize($filename));
fclose($handle);

$arrayOfLines = explode("\n", $contents);
print_r($arrayOfLines);







// function removeTrash ($arrayOfLines) {
// 	print_r($arrayOfLines);
// 	foreach ($arrayOfLines as $key => $value) {
// 		if(($key = array_search('=', $array)) !== FALSE) {
// 			echo 'found one';
// 			// unset($array[$key]);
// 		}
// 	}
// 	// 	$foundTrash = in_array("*", $arrayOfLines);
// 	// 	print_r($foundTrash);
// 	// return $cleanArrayOfLines;
	
// }






