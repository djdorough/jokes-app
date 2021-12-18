<head>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>


<?php

include "db_connect.php";

$keyword = addslashes($_GET['keyword']);
$keyword = "%" . $keyword . "%";
echo "<h2>Show all jokes with the word $keyword</h2>";
$stmt = $mysqli->prepare("SELECT JokeID, Joke_question, Joke_answer, users_id, username FROM Jokes_table JOIN users ON users.id = Jokes_table.users_id WHERE Joke_question LIKE ?");
$stmt->bind_param("s", $keyword);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($JokeID, $Joke_question, $Joke_answer, $userid, $username);
//$sql = "SELECT JokeID, Joke_question, Joke_answer, users_id, username FROM Jokes_table JOIN users ON users.id = Jokes_table.users_id WHERE Joke_question LIKE '%$keyword%'";
	




?>
	
	<div id="accordion">
		
<?php
if ($stmt->num_rows > 0) {
	// output data of each row
	while($row = $stmt->fetch()) {
		
		$safe_joke_question = htmlspecialchars($Joke_question);
		$safe_joke_answer = htmlspecialchars($Joke_answer);
		//echo "Joke id: " . $row["JokeID"]. " - Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
		echo "<h3>$Joke_question</h3>";
		echo "<div><p>" . $safe_joke_answer . " -- Submitted by user " . $username . "</p></div>";
	}
} else {
	echo "0 results";
}

?>

</div>

<a href="index.php">Return to main page</a>