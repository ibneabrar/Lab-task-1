<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<style><?php include "style.css" ?></style>
</head>
<body>
	<fieldset>
	<form method = "POST" action="">
		<label for="username">Username</label>
		<input type="text" id="username" name="username"><br>
		<p>Gender</p>
		<input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="female">
		<label for="Female">Female</label><br>
		<label for="password">Password</label><br>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" name="register" value="register">
	</form>
	</fieldset>

</body>
</html>