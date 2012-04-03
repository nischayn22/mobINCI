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
	            <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="Home.php" data-theme="" data-icon="home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="Events.php" data-theme="" data-icon="grid">
                                Events
                            </a>
                        </li>
                        <li>
                            <a href="Experience.php" data-theme="" data-icon="grid">
                                Experience
                            </a>
                        </li>
                        <li>
                            <a href="Help.php" data-theme="" data-icon="info">
                                Help
                            </a>
                        </li>
                    </ul>
                </div>
     
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

	//Start session
	session_start();
	
	$eventname = $_GET['eventname'];
	$username = $_SESSION['username'];
	

	
	//Create query
	$qry1="SELECT * FROM events WHERE eventname='$eventname' AND username='$username'";
	$result=mysql_query($qry1);
	$qry2 = "INSERT INTO events (eventname,username) VALUES('$eventname','$username')";
			
	//Check whether the query was successful or not
	if($result) {
	if(mysql_num_rows($result) > 0) {
		
		echo "<h1 align=center >Already Registered</h1>";
		exit();
	}
	else {
			$result2 = mysql_query($qry2);
			if($result2)
			echo "<h1 align=center >Registered Successfully<h1>";
		}
	}

?>
</body>
</html>