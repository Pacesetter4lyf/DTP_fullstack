<?php
	if( isset($_POST["submit"]) )
	{
		$firstname       = $_POST["first_name"];
		$lastname       = $_POST["last_name"];
		$email          = $_POST["email"];
		$password       = $_POST["password"];
		$confirm_password = $_POST["confirm_password"];
		
		require_once 'functions.inc.php';
		require_once 'dbconnect.php';
		
		if( emptyInputSignup($firstname, $email, $lastname, $password, $confirm_password) !== false )
		{
			header("location: ../signup.php?error=emptyinput");
			exit();
		}
		// if( invalidUsername($username) !== false )
		// {
		// 	header("location: ../signup.php?error=invalidusername");
		// 	exit();
		// }
		if( invalidEmail($email) !== false )
		{
			header("location: ../signup.php?error=invalidemail");
			exit();
		}
		if( passwordsMatch($password, $confirm_password) !== false )
		{
			header("location: ../signup.php?error=passwordmismatch");
			exit();
		}
		if( usernameExists($conn, $email) !== false )
		{
			header("location: ../signup.php?error=usernametaken");
			exit();
		}
		if( emailExists($conn, $email) !== false )
		{
			header("location: ../signup.php?error=emailregistered");
			exit();
		}
	}
	createUser($conn, $firstname, $lastname , $email, $password);
