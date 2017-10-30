<?php
//connect to database
$dsn = "mysql:host=localhost;dbname=test";
$dbuser = "test";
$dbpass = "test";

$dbh = new PDO($dsn, $dbuser, $dbpass) or die("nooooooooooooooo");

//get the username
$username = $dbh->quote($_POST['username']);
//$username = $dbh->quote('eqwe');

//mysql query to select field username if it's equal to the username that we check '
$result = $dbh->query("select username from users where username = {$username}");

//if number of rows fields is bigger them 0 that means it's NOT available '
if($result->rowCount()>0){
	//and we send 0 to the ajax request
	echo 0;
}else{
	//else if it's not bigger then 0, then it's available '
	//and we send 1 to the ajax request
	echo 1;
}

?>