<?php 

	// indexed arrays
	$example = ['one', 'two', 'three'];
	$colours = array('red', 'blue', 'green');
	
	echo $example[0] . "<br>"; 
	echo $colours[0] . "<br>";

	$numbers = [0,1,2];
	print_r($numbers); echo "<br>";
	
	$numbers[0] = 11;
	print_r($numbers); echo "<br>";

	$numbers[] = 99; // add a new value to the end of the array
	print_r($numbers); echo "<br>";

	array_push($numbers, 88); // another way
	print_r($numbers); echo "<br>";

	echo count($numbers) . "<br>"; // lenght of the array

	$mergeArray = array_merge($example, $colours);
	print_r($mergeArray); echo "<br>";

	// associative array (key value pairs)
	$listCalifications = ['Andrew' => 55, 'Jules' => 90, 'Mark' => 70];

	print_r($listCalifications); echo '<br>';
	echo $listCalifications['Jules']; echo '<br>';

	$listCalifications['Jessi'] = 77; // add a new value 
	print_r($listCalifications); echo '<br>';

	$listCalifications['Jessi'] = 45; // modify a value

	echo 'leght of $listCalifications: ' . count($listCalifications); // lenght



?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP basics</title>
</head>
<body>

</body>
</html>