<!DOCTYPE html>
<html>
<head>
	<title>PHP basics</title>
</head>
<body>
	<h1>Strings</h1>
</body>
</html>
<?php 
	// Concatanation
	$stringOne = 'Enter your email: ';
	$stringTwo = 'example@gmail.com';

	echo $stringOne . $stringTwo;
	echo '<br>';

	$name = 'Alexander';
	echo 'Hey, my name is ' . $name . "<br>";
	echo "Hey, my name is $name <br>"; // this is not work if we use single quotes

	// quotations
	echo "1 - He scremed \"whaaa\" <br>";
	echo '2 - He scremed "whaaa"';

	echo 'The first letter of $name <br>' . $name[0]; // print A from Alexander

	echo 'The lenght of $name: ' . strlen($name) . '<br>'; // lenght of a string

	echo '$name variable with strtoupper(): ' . strtoupper($name) . '<br>';
	echo '$name variable with strtolower(): ' . strtolower($name) . '<br>';
	echo 'x replace with X: ' . str_replace('x', 'X', $name) . '<br>';


?>