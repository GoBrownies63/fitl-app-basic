<?php
$TITLE = 'A Food Type';
$INGREDIENT = 'Chicken Breast';
$DESCRIPTION = 'I need a recipe I can make using
				boneless chicken breasts.';
$CODE = 'alert(This is a message)';
$DATE = 'June 1, 2015';

?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $TITLE; ?></title>
	</head>

	<body>
		<h1><?php echo $INGREDIENT; ?></h1>
			<p><?php echo $DESCRIPTION; ?></p>
				<pre>
					<?php echo $CODE; ?>
				</pre>
				<p>Question Date: <?php echo $DATE; ?></p>
	</body>
</html>