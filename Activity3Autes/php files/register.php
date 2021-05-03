<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="register.css">
</head>
<body>
  <div class="header">
  	<h1>REGISTER</h1>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	
    <div class="input-group">
  	  <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>">
  	</div>
  	
    <div class="input-group">
  	  <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
  	</div>
  	
    <div class="input-group">
  	  <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at
      least 8 or more characters" placeholder="Password" name="password_1">
  	</div>
  	
    <div class="input-group">
  	  <input type="password" placeholder="Confirm Password" name="password_2">
  	</div>
  	
    <div class="input-group">
  	  <input type="submit" class="btn" name="reg_user" value="Register">
    </div>
  	
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</body>
</html>