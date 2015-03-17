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

$reportTitle = array_shift($arrayOfLines);
print_r($reportTitle);
print_r($arrayOfLines);

$reportDate = array_shift($arrayOfLines);
print_r($reportDate);
print_r($arrayOfLines);

$reportOffice = array_shift($arrayOfLines);
print_r($reportOffice);
print_r($arrayOfLines);

$employeeArray = array_splice($arrayOfLines, -7);
print_r($employeeArray);
print_r($arrayOfLines);

$employeeCategories = $arrayOfLines[1];
print_r($employeeCategories);
print_r($arrayOfLines);

$employeeKeyCategories = explode(', ', $employeeCategories);
print_r($employeeKeyCategories);





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






