<?php
	
$host = "localhost";
$username = "root";
$user_pass = "root";
$database_in_use = "Jokes";

$mysqli = new mysqli($host, $username, $user_pass, $database_in_use);

echo $mysqli->host_info . "\n";

?>



