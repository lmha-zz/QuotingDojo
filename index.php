<?php
session_start();

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QuotingDojo</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div id="content_wrapper">
		<h1>Welcome to QuotingDojo</h1>
		<form action="process.php" method="post">
			<input type="hidden" name="action" value="add_quote">
			<label for="name">Your name: <input id="name_box" type='text' name="name" placeholder="Type your name here"></label>
			<label for="quote">Your quote: <textarea id="quote_box" name="quote" placeholder="Type your quote here" ></textarea></label>
			<button id="add_button" action="process.php">Add my quote!</button>
		</form>
		<form id="skip_wrapper" action="main.php" method="post">
			<button id="skip_button" action="main.php">Skip to quotes!</button>
		</form>
	</div>
</body>
</html>
