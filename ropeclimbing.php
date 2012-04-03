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
            <div data-theme="a" data-role="header" data-position="fixed">
                <h3 allign=center>
                    mobInci
                </h3>
            </div>
            <div data-role="content">
                <div data-role="navbar" data-iconpos="top">
                    <ul>
                        <li>
                            <a href="Home.html" data-theme="d" data-icon="home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="Events.html" data-theme="" data-icon="grid">
                                Events
                            </a>
                        </li>
                        <li>
                            <a href="Experience.html" data-theme="" data-icon="grid">
                                Experience
                            </a>
                        </li>
                        <li>
                            <a href="Help.html" data-theme="" data-icon="info">
                                Help
                            </a>
                        </li>
                    </ul>
                </div>
                <h3>
                    ROPE CLIMBING
                </h3>
                <div>
                    <img style="width: 288px; height: 400px" allign="centre"src="rope.jpg" />
                </div>
                <div>
                    <h4>
                        <b>
                        Rope climbing is a sport in which competitors, usually men, attempt to climb up a suspended vertical rope using only their hands
<br/>*  Cost : Rs 150 per head.


							<br/>*  
						
							
                        </b>
                    </h4>
                </div>
                 <form  action="registration.php" method="GET" >
<input type="hidden" name="eventname" value="ropeclimbing" />               
			   <input type="submit" data-theme="b" data-icon="forward" data-iconpos="right" value="Register for this event" />
               
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>