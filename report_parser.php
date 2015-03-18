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
$reportTitle = array_shift($arrayOfLines);
$reportDate = array_shift($arrayOfLines);
$reportOffice = array_shift($arrayOfLines);
$officeHeader = "{$reportTitle} . '|' . {$reportOffice} . '|' . {$reportDate} . PHP_EOL";

$employeeCategoriesArray[] = $arrayOfLines[1];

$employeeArray = array_splice($arrayOfLines, -7);
// var_dump($employeeArray);

foreach ($employeeArray as $key => $value) {
	var_dump($employeeArray[$key]);
	$eachEmployeeArray = explode(', ', $value);
	$employeeNumber = array_shift($eachEmployeeArray);
	$employeeSold = array_pop($eachEmployeeArray);
	$employeeName = implode(' ', $eachEmployeeArray);
}
var_dump($eachEmployeeArray);
var_dump($employeeName);


		





