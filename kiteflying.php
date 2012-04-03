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
                    KITE FLYING
                </h3>
                <div>
                    <img style="width: 288px; height: 200px" allign="centre"src="kite.jpg" />
                </div>
                <div>
                    <h4>
                        <b>
                          Kite flying is a fun activity which people of all ages can enjoy. All you have to do is go somewhere windy and you can literally go fly a kite.
<br/>*  The physics of how a kite gains lift is very similar to how an airplane gains lift.


							<br/>*  The wings generate lift force by the action of the moving air over the wing surface. A kite works in the same way. The wind blows in the direction of the kite and somewhat underneath it.
						
							
                        </b>
                    </h4>
                </div>
                <form  action="registration.php" method="GET" >
<input type="hidden" name="eventname" value="kiteflying" />               
			   <input type="submit" data-theme="b" data-icon="forward" data-iconpos="right" value="Register for this event" />
               
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>