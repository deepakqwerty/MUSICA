<?php
include("includes/config.php");
include("includes/handlers/Account.php");
$account = new Account();
$account->register();
include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name){
  if(isset($_POST[$name])){
    echo $_POST[$Name];
  }
}

  
?>
<html>
<head>
  <title> Welcome to Musica</title>

  <link rel="stylesheet" type="text/css" href="assets/css/register.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="assets/js/register.js"></script>
</head>
<body>

    <div id="background">
        <div id="loginContainer">
            <div id ="inputContainer">
                <form id="loginForm" action="register.php" method="post">
                    <h2> Login to your account</h2>
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
                    <h2> Create your free account</h2>
                    <p>
                        <?php echo $account->getError("Your username must be between 5 and 25 characters"); ?>
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" placeholder="e.g. AshKetchum01" value="<?php getInputValue('username') ?>" required>
                    </p>
                    <p>
                        <?php echo $account->getError("Your first name must be between 2 and 25 characters"); ?>
                        <label for="firstName">First Name</label>
                        <input id="firstName" name="firstName" type="text" placeholder="e.g. Ash" value="<?php getInputValue('firstName') ?>" required>
                    </p>
                    <p>
                        <?php echo $account->getError("Your last name must be between 2 and 25 characters"); ?>
                        <label for="lastName">Last Name</label>
                        <input id="lastName" name="lastName" type="text" placeholder="e.g. Ketchum" value="<?php getInputValue('lastName') ?>" required>
                    </p>
                    <p>
                        <?php echo $account->getError("Your emails don't match"); ?>
                        <?php echo $account->getError("Email is invalid"); ?>
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" placeholder="e.g. AshKetchum003@gmail.com" value="<?php getInputValue('email') ?>" required>
                    </p>
                    <p>
                        <label for="email2">Confirm Email</label>
                        <input id="email2" name="email2" type="email" placeholder="e.g. AshKetchum003@gmail.com" value="<?php getInputValue('email2') ?>" required>
                    </p>
                    <p>
                        <?php echo $account->getError("Your passwords don't match"); ?>
                        <?php echo $account->getError("Your password can only contain numbers and letters"); ?>
                        <?php echo $account->getError("Your password must be between 5 and 30 characters"); ?>
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
