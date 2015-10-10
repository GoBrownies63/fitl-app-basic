
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $object['food_name']; ?></title>
	</head>

	<body>
		
			<?php echo $object['food_name']; ?>
			<p><?php echo $object['food_type']; ?></p>
				<pre>
					<?php echo $object['brand']; ?>
				</pre>
				<p><?php echo $object['quantity']; ?></p>
				<?php echo $object['description']; ?>
	</body>
</html>