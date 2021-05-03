<?php 
	session_start();

	$username = "";
	$email = "";
	$password="";
	$errors = array();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	//if the register button is clicked
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		//ensure that form fields are filled properly

		if ($password_1 != $password_2) {
			array_push($errors, "Password do not match");
		}


		//email validation
		if (!stristr($email,"@") OR !stristr($email,".")) {
		array_push($errors, "Your email address is not correct <BR>"); 
		} 


		//user exist or not
		$select = mysqli_query($db, "SELECT * FROM users WHERE username = '".$_POST['username']."'");
		if(mysqli_num_rows($select)) {
    	array_push($errors, "This user already exists");
		}
		else {
		echo "";
		}

		
		//if no errors, save new user to database
		if (count($errors) == 0) {
			$sql = "INSERT INTO users (username, email, password_2)
					VALUES ('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php'); //redirect to homepage
		}

	}

	//log user in from login page
	if (isset($_POST['login'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		//ensure that form fields are filled properly
		if (empty($username)) {
			array_push($errors, "Username is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$select = mysqli_query($db, "SELECT * FROM users WHERE username = '".$_POST['username']."'");
			$result = mysqli_query($db, $query);

			if (mysqli_num_rows($select) > 0) {
			//login
			while($row=mysqli_fetch_array($select)){

			if($password==$row['password']){
			// store id as session
			$_SESSION['username'] = $row['username'];
	    	$_SESSION['success'] = "You are now logged in";
			header('location: index.php'); //redirect to homepage
			}
			else {
			//password incorrect
			array_push($errors,"Password Incorrect!");
			}

		}
	} else{
	// fail
	array_push($errors,"Username doesn't exist");

}

}
	

}

	
	//logout
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
 ?>