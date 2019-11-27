<?php
	
	$members = ['Lukas', 'Michael', 'Michelle'];

	for($i =0; $i<count($members); $i++) {
		echo $members[$i] . '<br>';
	}
	echo '<br>';
	foreach ($members as $member) {
		echo $member . '<br>';
	}
	echo '<br>';

	$products = [
		['name' => 'shiny star', 'price' => 20],
		['name' => 'green shell', 'price' => 10],
		['name' => 'red shell', 'price' => 15],
		['name' => 'gold coin', 'price' => 5],
		['name' => 'lightening bolt', 'price' => 40],
		['name' => 'banana skin', 'price' => 2],
	];

	foreach($products as $product) {
		echo $product['name'] . ' - ' . $product['price'];
		echo '<br/>';
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP bascis</title>
</head>
<body>
	<?php foreach($products as $product) { ?>
		<hr>
		<h3><?php echo $product['name']; ?></h3>
		<h3><?php echo $product['price']; ?></h3>
	<?php } ?>
</body>
</html>