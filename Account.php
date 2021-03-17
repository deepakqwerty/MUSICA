<?php
class Account {

    	private $con;
    	private $errorArray;
    	public function__construct($con){
    		$this->con = $con;
    		$this->errorArray = array();
    	}
    	
    public function register($un, $fn, $ln, $em, $em2, $pw, $pw2)
    {
    	$this->validateUsername($un);
    	$this->validateFirstname($fn);
    	$this->validateLastname($ln);
    	$this->validateEmails($em, $em2);
    	$this->validatePassword($pw, $pw2);

    	if(empty($this->errorArray) == true){
    		return true;
    	}
    	else{
    		return false;
    	}

    }

    public function getError($error){
    	if(!in_array($error, $this->errorArray)){
    		$error = "";

    	}
    	return "<span class='errorMessage'>$error</span>";
    }
    private function insertUserdetails($un, $fn, $ln, $em, $pw){
    	$encryptedPw = md5($pw);
    	$profilePic = "assets/images/profile-pics/herald.png";
    	$date = date("Y-m-d");

    	$result = mysqli_query($this->con, "INSERT INTO users VALUES ('','$un','$fn','$ln','$em','$encryptedPw','$date','$profile-pic')");

    	return $result;
    }

    private function validateUsername($un){
    	if(strlen($un) > 25 || strlen($un) < 5)
    	{
    		array_push($this->errorArray, Constants::$usernameCharacters);
    		return;
    	}
        
        $checkUsernameQuery = mysqli_query($this->con,"SELECT username FROM users WHERE username = '$un'"); 
        if(mysqli_num_rows($checkUsernameQuery) != 0) {
            array_push($this->errorArray, Constants::$usernameTaken);
            return;
        }
    }

    private function validateFirstName($fn){
    	if(strlen($fn) > 25 || strlen($fn) < 2 ){
    		array_push($this->errorArray, Constants::$firstNameCharacters);
    		return;
    	}
    }

    private function validateLastName($fn){
    	if(strlen($ln) > 25 || strlen($ln) < 2 ){
    		array_push($this->errorArray, Constants::$lastNameCharacters);
    		return;
    	}
    }
    
    private function validateEmails($em, $em2) {
        if($em != $em2) {
            array_push($this->errorArray, "Your emails dont't match");
            return;
            
        }
        
        if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
            array_push($this->errorArray," Email is invalid");
            return;
        
        }
        
        $checkEmailQuery = mysqli_query($this->con,"SELECT username FROM users WHERE username = '$un'"); 
        if(mysqli_num_rows($checkEmailQuery) != 0) {
            array_push($this->errorArray, Constants::$usernameTaken);
            return;
        }
    
    }
    
    private function validatePasswords($pw, $pw2) {
        if($pw != $pw2) {
            array_push($this->errorArray,"Your passwords don't match");
            return;
        }
        if(preg_match('/[^A-Za-z0-9]/',$pw)) {
            array_push($this->errorArray,"Your password can only contain numbers and letters");
            return;
        }
        if(strlen($pw) > 30 || strlen($pw) < 5) {
            array_push($this->errorArray,"Your password must be between 5 and 30 characters");
            return;
        }
        
    
    }

?>
