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
                            <a href="Home.php" data-theme="d" data-icon="home">
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
                <h3>
                    Pulse (Western Musicals)
                </h3>
                <div>
                    <img style="width: 288px; height: 100px" allign="centre"src="pulse.png" />
                </div>
                <div>
                    <h4>
                        <b>
                           An electrifying atmosphere, the ecstatic flow of blood through the veins, 15000 Watts of mind-numbing sound and a high that you will never forget! Headbang till you lose yourself.
							<br/>* Event is scheduled to be held on 4rth Feb 2012.
<br/>* All team has to register for this event two days before the scheduled event.
<br/>* Registration fees for this event is 500rs per team.
                        </b>
                    </h4>
                </div>
                 <form  action="registration.php" method="GET" >
<input type="hidden" name="eventname" value="pulse" />               
			   <input type="submit" data-theme="b" data-icon="forward" data-iconpos="right" value="Register for this event" />
               
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>