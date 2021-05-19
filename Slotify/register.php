<?php

include("includes/config.php");
include("includes/classes/Constants.php");
include("includes/classes/Account.php");
$account = new Account($con);

include("includes/handlers/register-handler.php");
include("includes/handlers/login-handler.php");

function getInputValue($name){
 if(isset($_POST[$name])){
   echo $_POST[$name];
 }
}
?>

<html>

<head>

 <title> Welcome to Musica</title>

 <link rel="stylesheet" type="text/css" href="assets/css/register.css">

 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js" type="text/javascript"> </script>


 <script src="assets/js/register.js"></script>

</head>

<body>
  <?php

    if(isset($_POST['registerButton']))
    {
      echo '<script>
            $(document).ready(function(){
                    $("#loginForm").hide();
                    $("#registerForm").show();
            });

            </script>';
    }
    else {
      echo '<script>
            $(document).ready(function(){
                    $("#loginForm").show();
                    $("#registerForm").hide();
            });

            </script>';
    }
    ?>
    <div id="background">

       <div id="loginContainer">

           <div id ="inputContainer">

               <form id="loginForm" action="register.php" method="post">

                   <h2> Log in to your account</h2>

                   <p>
                       <?php echo $account->getError(Constants::$loginFailed); ?>
                       <label for="loginUsername">Username</label>

                       <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. AshKetchum01" value="<?php getInputValue('loginUsername') ?>" required>

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

                   <h2> Create your free account in Musica</h2>

                   <p>


                   <?php echo $account->getError(Constants::$usernameCharacters); ?>
                   <?php echo $account->getError(Constants::$usernameTaken); ?>

                       <label for="username">Username</label>

                       <input id="username" name="username" type="text" placeholder="e.g. AshKetchum01" value="<?php getInputValue('username') ?>" required>

                   </p>

                   <p>

                       <?php echo $account->getError(Constants::$firstNameCharacters); ?>

                       <label for="firstName">First Name</label>

                       <input id="firstName" name="firstName" type="text" placeholder="e.g. Ash" value="<?php getInputValue('firstName') ?>" required>

                   </p>

                   <p>

                       <?php echo $account->getError(Constants::$lastNameCharacters); ?>

                       <label for="lastName">Last Name</label>

                       <input id="lastName" name="lastName" type="text" placeholder="e.g. Ketchum" value="<?php getInputValue('lastName') ?>" required>

                   </p>

                   <p>

                       <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                       <?php echo $account->getError(Constants::$emailInvalid); ?>
                       <?php echo $account->getError(Constants::$emailTaken); ?>

                       <label for="email">Email</label>

                       <input id="email" name="email" type="email" placeholder="e.g. AshKetchum003@gmail.com" value="<?php getInputValue('email') ?>" required>

                   </p>


                   <p>

                       <label for="email2">Confirm Email</label>

                       <input id="email2" name="email2" type="email" placeholder="e.g. AshKetchum003@gmail.com" value="<?php getInputValue('email2') ?>" required>

                   </p>

                   <p>

                       <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>

                       <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>

                       <?php echo $account->getError(Constants::$passwordCharacters); ?>

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


           <div id="loginText">
             <h1>Get your own Music!</h1>
             <h2>Listen to loads of exotic songs for free</h2>
             <ul>
               <li>Discover the music in you</li>
               <li>Create your own playlist</li>
               <li>Search for Concerts nearby</li>
               <li>Find about your favourite Artists and much more!</li>
             </ul>
           </div>

       </div>

   </div>


</body>
</html>
