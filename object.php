<?php
$id = $_REQUEST['id'];

$object = array(
	'title' => '',
	'ingredient' => '',
	'description' => '',
	'code' => '',
	'date' => '',
	);

// set the object variables
// based on the id value from the URL
if ($id == 1){ 
	$object = array(
		'title' => 'A Food Type',
		'ingredient' => 'Chicken Breast',
		'description' => 'I need a recipe I can make using boneless
		chicken breasts.',
		'code' => 'alert(this is a message',
		'date' => 'January 11, 2015',
		);

}

elseif($id == 2){
	$object = array(
	'title' => 'A Food Type',
	'ingredient' => 'Hamburger Meat',
	'description' => 'I need a recipe I can make using
					ground hamburger meat.',
	'code' => 'alert(This is a message)',
	'date' => 'June 1, 2015',
	);
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['title']; ?></title>
	</head>

	<body>
		
		<h1><?php echo $object['ingredient']; ?></h1>
			<p><?php echo $object['description']; ?></p>
				<pre>
					<?php echo $object['code']; ?>
				</pre>
				<p>Question Date: <?php echo $object['date']; ?></p>
	</body>
</html>