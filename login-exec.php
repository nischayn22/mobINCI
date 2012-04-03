<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>
        </title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
        <style>
            /* App custom styles */
        </style>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js">
        </script>
        <script src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js">
        </script>
    </head>
    <body>


<?php
	error_reporting(0);

	//Include database connection details
	require_once('config.php');
	
	
	//Validation error flag
	$errflag = false;
	
	//Connect to mysql server
	$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	//Select database
	$db = mysql_select_db(DB_DATABASE);
	if(!$db) {
		die("Unable to select database");
	}
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['username']);
	$password = clean($_POST['password']);
	
	//Input Validations
	if($password == '') {
		$errmsg_arr = 'Password missing';
		$errflag = true;
	}
	if($login == '') {
		$errmsg_arr = 'Username missing';
		$errflag = true;
	}
	
	
	//If there are input validations, redirect back to the login form
	if($errflag) {
		echo "<h1 align=center>{$errmsg_arr}</h1>";
			echo "<a data-role=button data-direction=reverse data-rel=back data-transition=fade data-theme=b href=Login.html>
			Try Again
                </a>";
			
	exit();
	}
	//Start session
	session_start();
		
	//Create query
	$qry="SELECT * FROM members WHERE login='$login' AND passwd='$password'";
	$result=mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		if(mysql_num_rows($result) == 1) {
			//Login Successful
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['username'] = $login;
			echo "<h1 align=center>Login Successful</h1>";
			echo "<a data-role=button data-direction=reverse data-transition=fade data-theme=b href=Home.php>
	Go Home                </a>";
			
			exit();
		}else {
			//Login failed
			echo "<h1 align=center>Wrong Username of Password</h1>";
			echo "<a data-role=button data-direction=reverse data-rel=back data-transition=fade data-theme=b href=Login.html>
			Try Again
                </a>";
			//exit();
		}
	}else {
		echo "Error";
		die("Query failed");
	}

?>
</body>
</html>