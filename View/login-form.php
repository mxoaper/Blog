<?php
	// Requires the config.php file
	require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
	<div>
		<!-- Labeled Username and you'll input your username -->
		<label for="username">Username : </label>
		<input type="text" name="username" />
	</div>

	<div>
		<!-- Labeled Password and you'll input your password -->
		<label for="password">Password: </label>
		<input type="password" name="password" />
	</div>

	<div>
		<!-- Submitting Button -->
		<button type="submit">Submit</button>
	
</form>