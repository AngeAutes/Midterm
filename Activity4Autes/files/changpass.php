<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<style>
		* {
      margin: 0px;
      padding: 0px;
    }

    body {
      font-size: 120%;
      font-family: "Courier New";
      background: url("bg2.gif")no-repeat center center fixed; 
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
    }

    label, p {
      color: #000000;
    }

    .header {
      width: 30%;
      margin: 50px auto 0px;
      color: white;
      background: #000080;
      text-align: center;
      border: 1px solid #B0C4DE;
      border-bottom: none;
      border-radius: 40px 40px 0px 0px;
      padding: 20px;
    }

    form, .content {
      width: 30%;
      margin: 0px auto;
      background: white;
      border: 1px solid #B0C4DE;
      border-radius: 0px 0px 40px 40px;
      padding: 20px;
    }

    .input-group {
      margin: 10px 0px 10px 0px;
    }

    .input-group label {
      display: block;
      text-align: left;
      margin: 3px;
    }

    .input-group input {
      height: 30px;
      width: 93%;
      padding: 5px 10px;
      font-size: 16px;
      border-radius: 5px;
      border: 1px solid gray;
    }

    .btn {
      padding: 5px;
      font-size: 15px;
      color: white;
      background:#000080;
      border: none;
      border-radius: 5px;
    }

    .error {
      width: 92%;
      margin: 0px auto;
      padding: 10px;
      border: 1px solid #a94442;
      color: #a94442;
      background: #F2DEDE;
      border-radius: 5px;
      text-align: left;
    }

    .success {
      color: #3C763D;
      background: #DFF0D8;
      border: 1px solid #3C763D;
      margin-bottom: 20px;
    }
</style>
</head>
<body>
	<div class="header"><h1>FORGOT PASSWORD</h1> </div>
     <form action="foxcheck.php" method="post" autocomplete="off">
      <center>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>


          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Username"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Username"><br>
          <?php }?>

     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br> 

          <input type="password" 
                 name="re_password" 
                 placeholder=" Confirm Password"><br><br>
<input type="submit" value="Update Password" class="btn"><br><br>
<center><b><a href="index.php">Already have an account?</a></b></center><br>
  </center>
     </form>
</body>
</html>