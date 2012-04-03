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
                <h3>
                    mobInci
                </h3>
            </div>
            <div data-role="content">
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
                            <a href="Experience.php" data-theme="d" data-icon="grid">
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
						echo "Welcome"." ".$_SESSION['username']."!";
						?>
                <div data-role="collapsible-set" data-theme="b" data-content-theme="b">
                    <div data-role="collapsible" data-collapsed="true">
                        <h3>
                            Pronites
                        </h3>
                        <ul data-role="listview" data-divider-theme="c" data-inset="false">
                            <li data-theme="c">
                                <a href="#page1" data-transition="slide">
                                    Haute Culture
                                </a>
                            </li>
                            <li data-theme="c">
                                <a href="#page1" data-transition="slide">
                                    War of DJs
                                </a>
                            </li>
                            <li data-theme="c">
                                <a href="#page1" data-transition="slide">
                                    Rock Concert
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div data-role="collapsible-set" data-theme="b" data-content-theme="">
                    <div data-role="collapsible" data-collapsed="true">
                        <h3>
                            Workshops
                        </h3>
                        <ul data-role="listview" data-divider-theme="b" data-inset="false">
                            <li data-theme="c">
                                <a href="#page1" data-transition="slide">
                                    Cake Making
                                </a>
                            </li>
                            <li data-theme="c">
                                <a href="#page1" data-transition="slide">
                                    Photography
                                </a>
                            </li>
                            <li data-theme="c">
                                <a href="#page1" data-transition="slide">
                                    Karate
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script>
            //App custom javascript
        </script>
    </body>
</html>