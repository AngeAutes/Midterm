</!DOCTYPE html>

<?php

if (isset($_POST['submit'])) { 
	$user = $_POST['uname'];
	$pass = $_POST['pwd'];

    if ($user=="ADMIN" && $pass=="ADMIN123") { 

		echo "<script> Welcome! </script>";
		echo "<script> location.href='welcome.php' </script>";
    } 
        
        else {
        echo "<script>alert('Username or password incorrect!')</script>";
		echo "<script> location.href='login.php' </script>";
	} 
} 

?>

<html>
<head>
	<title>Login Page</title>

	<style type="text/css">

	body{
	margin: 0;
	padding: 0;
	font-family: "Courier New";
	background-image: url("bg.gif");/
  	background-position: center;
  	background-repeat: no-repeat;
  	background-size: cover;
	}

	table{
		margin-top: 150px;
	}

 	h1{
	color: white;
	text-transform: uppercase;
	font-weight: 1000;
	text-shadow: 2px 2px #918e8e;
	}
 	
 	input[type = "text"], input[type = "password"]{
	border: 0;
	background: #000000;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #3498db;
	padding: 14px 10px;
	width: 200px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	}

	input[type = "text"]:focus, input[type = "password"]:focus{
	width: 280px;
	border-color: #63C5DA;
	}
 
 	input[type = "submit"]{
	border: 0;
	background: #000000;
	display: block;
	margin: 20px auto;
	text-align: center;
	border: 2px solid #59788E;
	padding: 14px 40px;
	outline: none;
	color: white;
	border-radius: 24px;
	transition: 0.25s;
	cursor: pointer;
	}

	input[type = "submit"]:hover{
	background: #59788E;
	}

</style>
</head>

<body>

<form method="post">
	<table align="center">
			<th><h1 align="center">Login</h2></th>

		<tr>
			<td><input type="text" name="uname" placeholder="Enter Username" autocomplete="off" required></td>
		</tr>

		<tr>
			<td><input type="password" name="pwd" placeholder="Enter Password" required></td>
		</tr>
		<tr>
			<td align="right" colspan="2"><input type="submit" name="submit" value="Login"></td>
		</tr>
	</table>
</form>

</body>
</html>