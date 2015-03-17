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

$reportDate = array_shift($arrayOfLines);
print_r($reportDate);

$reportOffice = array_shift($arrayOfLines);
print_r($reportOffice);

$employeeCategories = $arrayOfLines[1];
$employeeKeyCategories = explode(', ', $employeeCategories);
print_r($employeeKeyCategories);

$employeeArray = array_splice($arrayOfLines, -7);
print_r($employeeArray);

function raiseUpEmployees($employeeArray) {
	echo ("in raiseUpEmployees");
	foreach ($employeeArray as $key => $value) {
		print_r($value);
//to string
		$employees = explode(', ', $value);
		print_r($employees);
//to array
		return $employees; 
		}

		***** STOPPED HERE NOT DONE YET *****
		** GOING TO POP OFF ALL EMPLOYEE DETAILS TO 
		INDEPENDENT VARIABLES **

		$firstName = "";
		$firstName += "$employee[$i]";
		var_dump($firstName);
		print_r($firstName);
		
		
	
		
		}

	}

$firstName = raiseUpEmployees($employeeArray);

//merge first and last names of employees
// function mergeEmployeeNames ($employeeArray) {
// 	echo $employeeArray;
// 	foreach ($employeeArray as $employee) {	
// 		foreach ($employee as $info) {
// 			$firstName = "";
// 			$firstName = array_splice($info[1]);
// 			print_r($firstName);
// 			print_r($info);
// 			// $lastName = "";
// 			// $lastName = array_splice($info[2]);
// 			// $fullName = "";
			
// 		}
// 	}
// }
// mergeEmployeeNames($employeeArray);




