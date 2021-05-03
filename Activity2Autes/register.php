<?php include('server.php') ?>

</!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="header">
		<h2> Register </h2>
	</div>

	<form method="post" action="register.php" autocomplete="off">

		<div class="input-group">

			<!-- display validation errors -->
			<?php include('errors.php'); ?>

			<div id="iderror"> 
			<?php 
			$msg="";
			echo $msg; ?> 
			</div>

			<label> Username </label>
			<input type="text" name="username" required value="<?php echo $username; ?>">
		</div>

		<div class="input-group">
			<label> Email </label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>

		<div class="input-group">
			<label> Password </label>
			<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at
			least 8 or more characters" name="password_1" required>

		<div class="input-group">
			<label> Confirm Password </label>
			<input type="password" name="password_2" required>
		</div>

		<div class="input-group">
			<button type="submit" name="register" class="btn"> Register </button>
		</div>

		<p>
			Already a member? <a href="login.php"> Sign in</a>
		</p>

	</form>


</body>
</html>