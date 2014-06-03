<?php
require('process.php');

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QuotingDojo</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div id="quotes_wrapper">
		<h2>Here are the awesome quotes!</h2>
		<div id="quotes">
			<?= quote_feed() ?>
		</div>
	</div>
</body>
</html>