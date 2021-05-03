<?php include('server.php'); ?>

</!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2> Login </h2>
	</div>

	<form method="post" action="login.php" autocomplete="off">
		<!-- display validation errors -->
			<?php include('errors.php'); ?>
		<div class="input-group">
			<label> Username </label>
			<input type="text" name="username" required>
		</div>

		<div class="input-group">
			<label> Password </label>
			<input type="password" name="password" required>
		</div>

		<div class="input-group">
			<button type="submit" name="login" class="btn"> Login </button>
		</div>

		<p>
			Not yet a member? <a href="register.php"> Sign up</a>
		</p>

	</form>

	
	
</body>
</html>