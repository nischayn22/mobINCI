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
	
	//Include database connection details
	require_once('config.php');
	
	//String to store validation errors
	$errmsg_arr = '';
	
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
	$email = clean($_POST['email']);
	
	//Input Validations
	if($login == '') {
		$errmsg_arr = 'Login ID missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr = 'Password missing';
		$errflag = true;
	}
	if($email == '') {
		$errmsg_arr = 'Email missing';
		$errflag = true;
	}

	//Check for duplicate login ID
	if($login != '') {
		$qry = "SELECT * FROM members WHERE login='$login'";
		$result = mysql_query($qry);
		if($result) {
			if(mysql_num_rows($result) > 0) {
				$errmsg_arr = 'Login ID already in use';
				$errflag = true;
			}
		}
		else {
			die("Query failed");
		}
	}
	
	//If there are input validations, redirect back to the registration form
	if($errflag) {
		echo "<h1 align=center>{$errmsg_arr}</h1>";
			echo "<a data-role=button data-direction=reverse data-rel=back data-transition=fade data-theme=b href=Register.html>
			Try Again
                </a>"; 
		exit();
	}

	//Create INSERT query
	$qry = "INSERT INTO members(login,email, passwd) VALUES('$login','$email','$password')";
	$result = mysql_query($qry);
	
	//Check whether the query was successful or not
	if($result) {
		echo "<h1 align=center>Registered Successfully</h1>";
			echo "<a data-role=button data-direction=reverse  data-transition=fade data-theme=b href=Login.html>
			Login
                </a>"; 
		exit();
	}else {
		die("Query failed");
	}
?>
</body>
</html>