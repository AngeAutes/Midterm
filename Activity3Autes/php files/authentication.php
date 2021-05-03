<?php include('server.php') ?>

<!DOCTYPE html>
<html>
<head>
<title>Authentication</title>
  <link rel="stylesheet" type="text/css" href="authentication.css">

<style>
#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 30px;
  font-size: 17px;
}

#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}
</style>
</head>

<body>
<div class="header">
    <h1>AUTHENTICATION</h1>
</div>
  <form method="post" action="authentication.php">
    <?php include('errors.php'); ?>
      <p>Code Number:</p>
      <div class="input-group">
      <input type="text" name="code" placeholder="Enter Code Number" required>
    </div>
    <div class="input-group">
      <input type="submit" class="btn" name="log_user" value="Login">
    </div>
</form>
<center>
<button onclick="myFunction()">Click for Verification Code</button> </center>

<div id="snackbar"><?php 
        $randomid = mt_rand(100000,999999); 
        echo $randomid; 
      ?></div>

<script>
function myFunction() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 300000);
}
</script>

</body>
</html>
