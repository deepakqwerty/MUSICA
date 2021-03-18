
<?php


function santizeFormPassword($inputText) {


 $inputText = strip_tags($inputText);


 return $inputText;


}


function santizeFormUsername($inputText){


 $inputText = strip_tags($inputText);


 $inputText = str_replace(" ","",$inputText);


 return $inputText;


}


function santizeFormString($inputText){


 $inputText = strip_tags($inputText);


 $inputText = str_replace(" ","",$inputText);


 $inputText = ucfirst(strtolower($inputText));


 return $inputText;







}


if (isset($_POST['registerButton']))


{


 $username = santizeFormUsername($_POST['username']);


 $firstName = santizeFormString($_POST['firstName']);


 $lastName = santizeFormString($_POST['lastName']);


 $email = santizeFormString($_POST['email']);


 $email2 = santizeFormString($_POST['email2']);


 $password = santizeFormPassword($_POST['password']);


 $password2 = santizeFormPassword($_POST['password2']);







 $wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);


 if($wasSuccessful == true){


$_SESSION['userLoggedIn']=$username;
 header("Location: index.php");


 }



}

?>
