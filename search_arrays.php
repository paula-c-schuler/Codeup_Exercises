<?php
*********** I NEED TO TEST THESE AND REVIEW AND STUDY ************
 // first names
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compareArray = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

//********* FIRST CHALLENGE ************
//Create a function that returns true or false. 
//Search for Tina and Bob in $names as separate searches.
$query = ('Tina'); 
//would have to do it again with 'Bob' separately the way
//it is written now. Will only handle one $query at a time.
function arraySearch($query, $names) {
	foreach ($names as $value) {
		//not looking for a key, so it is just $value//
		$found = false; 
		//set a false variable to catch only the true//

		if ($query == $value) {
			$found = true;
			return $found;
		} else if {
			return false;
		}
	}
} 
echo arraySearch('Tina', $names);
echo arraySearch('Bob', $names);

//********* NEXT CHALLENGE ***************
//function to compare 2 arrays 
//that returns the number of values in common between the arrays. 
//Use the 2 example arrays and make sure your solution uses array_search().

function arrayMatch($names, $compareArray) {
		//set variable to start the count
		$count = 0; 
		foreach ($names as $element) {
		//only one foreach because array_search does the actual comparison 
		//with each $value derived from each foreach cycle. 
		array_search($element, $compareArray);
		//array_search returns a key value or index value if no defined key therefore...
		if(is_numeric($result));
		$count++; 	
		}
	return $count;
	}
}
 