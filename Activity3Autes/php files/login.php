<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  <div class="header">
  	<h1>LOGIN</h1>
	 
  <form method="post" action="login.php" autocomplete="off">
  	<?php include('errors.php'); ?>
  	
    <div class="input-group">
  		<p>Username</p>
  		<input type="text" name="username" placeholder="Enter Username">
  	</div>
    
  	<div class="input-group">
  		<p>Password</p>
  		<input type="password" name="password" placeholder="Enter Password">
    </div>
  	
  	<div class="input-group">
  		<input type="submit" class="btn" name="login_user" value="Login">
    </div>
  	
  	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  </form>
</div>
</body>
</html>