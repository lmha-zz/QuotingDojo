<?php
session_start();

require('connection.php');

// var_dump($_POST);
// var_dump($_SESSION);
// die();

if(isset($_POST['action']) && $_POST['action'] == 'add_quote')
{
	$esc_quote = escape_this_string($_POST['quote']);
	$esc_name = escape_this_string($_POST['name']);
	$query = "INSERT INTO quotes(name, content, created_at, updated_at) VALUES ('{$esc_name}', '{$esc_quote}', NOW(), NOW())";
	run_mysql_query($query);
	header('Location: main.php');
}

function quote_feed()
{
	$query = "SELECT * FROM quotes ORDER BY created_at DESC";
	$feed = fetch_all($query);
	date_default_timezone_set("America/Los_Angeles");
	foreach ($feed as $array) {
		$date = date_create($array['created_at']);
		echo "<div><p class='quote'>".'"'.$array['content'].'"'."</p><p class='author'> - {$array['name']} at ".date_format($date, 'h:i a F jS, Y') ."</div>";
	}
	die();
}
?>