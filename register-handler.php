<?php
function RectifyPassword($inputText) {
  $inputText = strip_tags($inputText);
  return $inputText;
}
function RectifyUsername($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ","",$inputText);
  return $inputText;
}
function RectifyString($inputText) {
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ","",$inputText);
  $inputText = ucfirst(strtolower($inputText));
  return $inputText;
}

function validateUsername($un){
}
function validateFirstName($fn){
}
function validateLastName($ln){
}
function validateEmails($em,$em2){
}
function validatePasswords($pw,$pw2){
}

function santizeFormUserbane($inputText){
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ","",$inputText);
  return $inputText;
}
function santizeFormString($inputText)){
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
  $email2 = RectifyString($_POST['email2']);
  $password = RectifyPassword($_POST['password']);
  $password2 = santizeFormPassword($_POST['password2']);

  $wasSuccessful = $account->register($username, $firstName, $lastName, $email,$email2,$password,$password2);
  if($wasSuccessful == true){
    header("Location: index.php");
  }

  validateUsername($username);
  validateFirstName($firstName);
  validateLastName($lastName);
  validateEmails($email,$email2);
  validatePasswords($password,$password2);
}

?>
