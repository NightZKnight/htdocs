<?php
	$host = "localhost:81";
	$user = "test";
	$pass = "test";
	$dbname = "memberdirectory";
	
	$cxn = mysqli_connect($host,$user,$pass,$dbname) or die("Can not connect.");
	
	switch($_POST['button'])
	{
		case "Log in":
			
			$query = "SELECT userName FROM memberzf2000 WHERE userName='{$_POST['uName']}'";
			$result = mysqli_query($cxn,$query);
			
			if(mysqli_num_rows($result) > 0) //check user name
			{
				$query = "SELECT loginName FROM Member 
								WHERE loginName='{$_POST['uName']}' 
								AND password=md5('{$_POST['pass']}')";
				$result = mysqli_query($cxn,$query);
				if(mysqli_num_rows($result) > 0) //check password
				{
					echo "password correct!";
				}
				else
				{
					echo "Wrong password";
				}
			}
			else
			{
				echo "User Name does not exist!";
			}
		break;
		
		case "Register":
			
		break;
	}
	
?>