<?php
session_start(); 
?>
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
        <div data-role="page" id="page1">
            <div data-role="content">
                <div>
                    <img style="width: 288px; height: 60px" src="mobinci.png" />
                </div>
                <h1>
                    
                        
						<?php
						echo "Welcome"." ".$_SESSION['username']."!";
						?>
                    </h1>  
                    
                
                <ul data-role="listview" data-divider-theme="b" data-inset="true">
                    <li data-role="list-divider" role="heading">
                    </li>
                    <li data-theme="d">
                        <a href="Events.php" data-transition="slide">
                            Events
                        </a>
                    </li>
                    <li data-theme="d">
                        <a href="Experience.php" data-transition="slide">
                            Experience
                        </a>
                    </li>
                    <li data-theme="d">
                        <a href="Updates.php" data-transition="slide">
                            Updates
                        </a>
                    </li>
                    <li data-theme="d">
                        <a href="Help.php" data-transition="slide">
                            Help
                        </a>
                    </li>
                </ul>
            </div>
        </div>
		
        <script>
            //App custom javascript
        </script>
    </body>
</html>