<?php
    class Account{

    	private $con;
    	private $errorArray;
    	public function__construct($con){
    		$this->con = $con;
    		$this->errorArray = array();
    	}
    	
    } 
    public fucntion register($un, $fn, $ln, $em, $em2, $pw, $pw2)
    {
    	$this->validateUsername($un);
    	$this->validateFirstname($fn);
    	$this->validateLastname($ln);
    	$this->validateEmails($e, $em2);
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

    









?>