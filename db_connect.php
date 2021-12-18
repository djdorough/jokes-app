<?php
	
$host = "l6glqt8gsx37y4hs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "ta05kk1hap1elym3";
$user_pass = "xvcy55rv7zguvgst";
$database_in_use = "Jokes";

$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

echo $mysqli->host_info . "\n";

?>



