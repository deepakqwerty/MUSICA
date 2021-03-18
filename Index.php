<?php
include("includes/config.php");

//session_destroy(); LOGOUT7

if(isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn=$_SESSION['userLoggedIn'];
}
 else {
       header("Location: register.php");
}

?>


<html>




<head>


	<title>Welcome to Musica!</title>


</head>


<body>


	Hello!







</body>


</html>
