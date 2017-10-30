<!DOCTYPE html> 
<html>
	<head> <title>Zombie Factory 2000</title>
		
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="icon" type="image/icon" href="imgs/favicon.ico">
	
	</head>
	<body background="imgs/background.png">
		<h1>Zombie Factory 2000</h1>
		
		<iframe id="nav" height="100%" width="125" src="nav.html" scrolling="no" frameborder="0"> That sucks!</iframe>
		
		<div class="txt login">
		
			<form action="login2.php" method="POST" style="text-align: right; float: left">
				<fieldset><legend>Login Form</legend>
					User Name <input name="uName" type="text"> <br>
					Password <input name="pass" type="password"> <br>
					<input type="submit" value="Log in" name="button">
				</fieldset>
			</form>
			
		</div>
		<div class="txt reg">
				
			<form action="login2.php" method="POST" style="text-align: right; float: right">
				<fieldset><legend>Registration Form</legend>
					User Name					<input name="1" type="text"> <br>
					Password					<input name="2" type="password"> <br>
					Retype password		<input name="3" type="password"> <br>
					Email							<input name="4" type="text"> <br>
					First Name				<input name="5" type="text"> <br>
					Last Name					<input name="6" type="text"> <br>
					<input type="Submit" value="Register" name="button">
				</fieldset>
			</form>
			
			
		</div>
	</body>
</html>