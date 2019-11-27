<?php 

	// multi-dimensional arrays
	$blogs = [
		['Julian', 'title of Julian\'s blog', 'lorem', 30],
		['Sebastian', 'title of Sebastian\'s blog', 'lorem', 10],
		['George', 'title of George\'s blog', 'lorem', 25],
	];

	print_r($blogs[0][1]); echo "<br>";

	// with key value pairs
	$blogs = [
		['author' => 'Julian', 'title' => 'title of Julian\'s blog', 'content' => 'lorem', 'likes' => 30],
		['author' => 'Sebastian', 'title' => 'title of Sebastian\'s blog', 'content' => 'lorem', 'likes' => 10],
		['author' => 'George', 'title' => 'title of George\'s blog', 'content' => 'lorem', 'likes' => 25],
	];

	echo $blogs[2]['author']; echo "<br>";
	echo count($blogs); echo "<br>"; // numbers of blogs

	$blogs[] = ['title' => 'title of Mercury\'s blog', 'author' => 'Mercury', 'content' => 'lorem', 'likes' => 30]; // add a new one
	print_r($blogs); echo "<br><br>";

	$popped = array_pop($blogs); // save the last one
	print_r($popped);

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP basics</title>
</head>
<body>

</body>
</html>