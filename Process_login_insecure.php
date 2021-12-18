</head>
<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "db_connect.php";

$username = $_POST['username'];
$password = $_POST['password'];

echo "You attempted to login with " . $username . " and " . $password . "<br>";
$stmt = $mysqli->prepare("SELECT id, username, password FROM users WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);

$stmt->execute();
$stmt->store_result();

$stmt->bind_result($userid, $uname, $pw);




if ($stmt->num_rows > 0) {
	// output data of each row
	$row = $stmt->fetch();
	$userid = $row['id'];
	echo "Login successful!<br>";
	$_SESSION['username'] = $uname;
	$_SESSION['userid'] = $userid;
	
	
	echo "</div>";
	
} else {
	echo "0 results. Nobody with username and password";
	$_SESSION = [];
	session_destroy();
	echo "<br><a href='index.php'>Return to main page</a>";
}

echo "SESSION = <br>";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
echo "<br><a href='index.php'>Return to main page</a>";
?>
