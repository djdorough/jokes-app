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

$sql = "SELECT JokeID, Joke_question, Joke_answer, users_id, username

	FROM Jokes_table 

	JOIN users ON users.id = Jokes_table.users_id";
	
	//"SELECT JokeID, Joke_question, Joke_answer, users_id FROM Jokes_table";
$result = $mysqli->query($sql);

?>

	<div id="accordion">
		
<?php

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		//echo "Joke id: " . $row["JokeID"]. " - Joke Question: " . $row["Joke_question"]. " " . $row["Joke_answer"]. "<br>";
		echo "<h3>$row[Joke_question]</h3>";
		echo "<div><p>" . $row["Joke_answer"] . "-- Submitted by user " . $row['username'] . "</p></div>";
	}
} else {
	echo "0 results";
}

?>

</div>