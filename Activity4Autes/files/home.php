
<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
	body {
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
	<div class="header">
     <center><h1>Welcome, <?php echo $_SESSION['username']; ?></h1> </center>
    </div>

    <div class="content">
   	<div class="act">
    	<h1><center><button type="submit">  <a href="display.php"><h2>View Activity Log</h2></a> </button></center></h1>
    	</div>
    	<h1><center><a href="logout.php">Logout</a></center><br/></h1>
    	</div>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>                            		                            