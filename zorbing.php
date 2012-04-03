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
                    ZORBING
                </h3>
                <div>
                    <img style="width: 288px; height: 200px" allign="centre"src="zorb11.jpg" />
                </div>
                <div>
                    <h4>
                        <b>
                           A Zorb is a huge round clear polyvinyl chloride inflatable ball that looks much like a giant soap bubble. It weighs 200 pounds and spans 10.5 feet in diameter. It has two skins–one inside the other.
<br/>*  A person stands inside the smaller skin, or what would be the yoke of an egg, and is suspended by a cushion of air 2 feet off the ground.
						


							<br/>* They put you inside the ball and tell you to run like a hamster to pick up some momentum.
							
                        </b>
                    </h4>
                </div>
 <form  action="registration.php" method="GET" >
<input type="hidden" name="eventname" value="zorbing" />               
			   <input type="submit" data-theme="b" data-icon="forward" data-iconpos="right" value="Register for this event" />
                           </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>