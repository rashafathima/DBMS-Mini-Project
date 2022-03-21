<?php
session_start();
include('server.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-modal">
        <div class="form-toggle">
            <button id="login-toggle" onclick="toggleLogin()">Log in</button>
            <button id="signup-toggle" onclick="toggleSignup()">Sign up</button>
        </div>
        <?php include('message.php')?>
        <div id="login-form">
            <form name="f1" action = "loginserv.php"  method = "POST">
                <input type="Email" name="Email" placeholder="Enter email (some@gmail.com)" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/>
                <input type="password" name="password" placeholder="Enter password"/>
                <button type="submit" name="login" class="btn login" >Login</button>
            </form>
        </div>

        <div id="signup-form">
            <form name="f2" action = "supserv.php"  method = "POST">
                <input type="Email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="Enter your email (some@gmail.com)"/>
                <input type="password" name="password" pattern="^[A-Za-z0-9_.$*@+-]{6,15}$" placeholder="Create password (6 characters or more)"/>
                                <input type="password" name="cpassword" placeholder="Confirm password"/>
                <button type="submit" name="signup" class="btn signup">Sign up</button>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="logscript.js" ></script>
</body>
</html>
