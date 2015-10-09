<?php
$type = $_REQUEST['type'];


if ($type == 'car'){
	$make = 'Dodge';
	$model = 'Colt';
	$year = '1987';
}
elseif ($type == 'truck'){
	$make = 'Ford';
	$model = 'Ranger';
	$year = '2006';
}

else {
	$make = '';
	$model = '';
	$year = '';	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Vehicle Information</title>
</head>
<body>
	Make: <?php echo $make; ?></br>
	Model: <?php echo $model; ?></br>
	Year: <?php echo $year; ?>


