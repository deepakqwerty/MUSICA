<?php
include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

?>
<html>
<head>
  <title> Welcome to Musicly</title>
  
  <link rel="stylesheet" type="text/css" href="assets/css/register.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="assets/js/register.js"></script>
</head>
<body>

        <div id="background">

        <div id="loginContainer">
            <div id ="inputContainer">
                <form id="loginForm" action="register.php" method="post">
                    <h3> Login to your account</h3>
                    <p>
                        <label for="loginUsername">Username</label>
                        <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. AshKetchum01" required>
                    </p>
                    <p>
                        <label for="loginPassword">Password</label>
                        <input id="loginPassword" name="loginPassword" type="password" required>
                    </p>
                    <button type="submit" name="loginButton">Log In</button>
                
                    <div class="hasAccountText">
                        <span id="hideLogin">Don't have an account yet? Signup here.</span>

                    </div>
                
                
                </form>

                <form id="registerForm" action="register.php" method="post">
                    <h3> Create your free account</h3>
                    <p>
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="e.g. AshKetchum01" required>
                    </p>
                    <p>
                        <label for="firstName">First Name</label>
                        <input id="firstName" name="firstName" type="text" placeholder="e.g. Ash" required>
                    </p>
                    <p>
                        <label for="lastName">Last Name</label>
                        <input id="lastName" name="lastName" type="text" placeholder="e.g. Ketchum" required>
                    </p>
                    <p>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="e.g. AshKetchum003@gmail.com" required>
                    </p>
                    <p>
                        <label for="email2">Confirm Email</label>
                        <input id="email2" name="email2" type="email" placeholder="e.g. AshKetchum003@gmail.com" required>
                    </p>
                    <p>
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password"  placeholder="Your Password" required>
                    </p>
                    <p>
                        <label for="password2">Confirm Password</label>
                        <input id="password2" name="password2" type="password" required>
                    </p>
                    <button type="submit" name="registerButton">Sign Up</button>
                
                    <div class="hasAccountText">
                        <span id="hideRegister">Already have an account yet? Log in here.</span>

                    </div>
                
                </form>
            </div>
        </div>
    </div>
</body>
</html>
