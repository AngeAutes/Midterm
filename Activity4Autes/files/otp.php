<html>
	<head>
		<title>Authentication</title>
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
		<div class="header"><h1>AUTHENTICATION</h1> 
		</div>
		<form action="otpx.php" method="post" autocomplete="off">
		<center>
    		<p>Code Number:</p>
    		<br>
		
          <?php if (isset($_GET['num1'])) { ?>
               <input type="text" 
                      name="num1" 
                      placeholder="Username"
                      value="<?php echo $_GET['num1']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="num1" 
                      placeholder="Enter Code Number"><br> <br>
          <?php }?>
			<input type="submit" value="Send" class="btn">
</center>
		</form>
	<?php 
?> </div>
		</body>
	</html>