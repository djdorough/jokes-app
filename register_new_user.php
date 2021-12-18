<html>

<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
</head>
<body>
	<h1>Please Register</h1>
	
<?php

include "db_connect.php";

?>

<form class="form-horizontal" action="process_new_user.php" method="post">
<fieldset>


<div class="form-group">
  <label class="col-md-4 control-label" for="username">Username</label>
  <div class="col-md-5">
    <input id="username" name="username" placeholder="your name" class="form-control input-md" required="">
    <p class="help-block">Please enter a username</p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password1">Password</label>
  <div class="col-md-5">
    <input id="password1" type = "password" name="password1" placeholder="password" class="form-control input-md" required="">
    <p class="help-block">Please enter a password<br>Must be 8 characters in length<br>Must contain at least one special character<br>Must contain at least one number<br></p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="password2">Password</label>
  <div class="col-md-5">
    <input id="password2" type = "password" name="password2" placeholder="confirm password" class="form-control input-md" required="">
    <p class="help-block">Please confirm password</p>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Create new user</button>
  </div>
</div>

</fieldset>
</form>

<?php
	
$mysqli->close();

?>
	
</body>

</html>