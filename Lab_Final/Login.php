<?php
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
		<style><?php include "style.css" ?></style>
</head>
<body>
<fieldset>
<form method = "POST" action="loginAct.php">
	<label for = "username">Username</label>
	<input type = "text" id="username" name="username"><br>
	<label for = "password">Password</label>
	<input type="password" id="password" name="password"><br><br>
	<input type="submit" name="submit" value="Login">
</form>
</fieldset>
</body>
</html>
