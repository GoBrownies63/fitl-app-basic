<?php
$page = $_REQUEST['page'];

include 'db-connection.php';



// Load the show page
function show($id){
	global $connection;

	$object = array(
	'id' => '',
	'food_type' => '',
	'food_name' => '',
	'brand' => '',
	'quantity' => '',
	'description' => '',
	);

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

	// Load the view file
	include 'grocery-show-view.php';
}

// Load the create function
function create(){
	include 'grocery-create-view.php';
}


?>