<?php
$id = $_REQUEST['id'];

$object = array(
	'id' => '',
	'food_type' => '',
	'brand' => '',
	'quantity' => '',
	'description' => '',
	);


// Database connection credentials
$servername = 'localhost';
$username = 'homestead';
$password = 'secret';

// Create connection
$connection = new mysqli($servername, $username, $password);

// Check for an error
if ($connection->connect_error) {
	echo 'Connection failed: ' , $connection->connect_error;
	exit;
}

// Otherwise, connected successfully!
// echo 'Connected successfully';

// Connect to the fitl database
$connection->select_db('fitl');

// Query to select the object
// SELECT * FROM groceries WHERE id = 1
$sql = 'SELECT * FROM groceries WHERE id = '. $id;

$result = $connection->query($sql);

// Check for an retrieve the object
if ($result->num_rows > 0){
	$object = $result->fetch_assoc();
	//echo '<pre>';
	//print_r($object);
	//echo '</pre>';
}



?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['food_type']; ?></title>
	</head>

	<body>
		
		
			<p><?php echo $object['food_type']; ?></p>
				<pre>
					<?php echo $object['brand']; ?>
				</pre>
				<p><?php echo $object['quantity']; ?></p>
				<?php echo $object['description']; ?>
	</body>
</html>