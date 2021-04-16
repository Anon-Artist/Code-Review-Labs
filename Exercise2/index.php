<?php
$file = $_GET['file'];
if(isset($file))
{
  include("lib/functions/$file");
}
?>
<html>
    <head>
            <title>Vuln Labs</title>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Play">
            <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Orbitron">
        </head>
        <style>
            body {
                background: url(bg.jpg) no-repeat center center fixed;
                background-position: fixed;
            }

            h1 {
                margin-top: 50px;
                font-size: 60px;
                color: white;
                font-family: orbitron;
                margin-bottom: 460px;
            }

            input[type=button] {
                margin-top: 20px;
                font-size: 40px;
                color: whitesmoke;
                border-radius: 6px;
                border: 5px solid  whitesmoke;
                background: transparent;
                font-family: Play;
            }

            input[type=button]:hover {
                background: white;
                color: black;
            }
        </style>
        <body>
                <h1>Path Traversal Exercise</h1>
                <!-- file parameter -->
            </body>
    </html>
