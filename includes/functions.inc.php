<?php
	function emptyInputSignup($fullname, $email, $username, $password, $passwordRepeat)
	{
		$result;
		if( empty($fullname) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat) )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function emptyInputLogin($email, $password)
	{
		$result;
		if( empty($email) || empty($password) )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function invalidUsername($username)
	{
		$result;
		if( !preg_match("/^[a-zA-Z0-9]*$/", $username) )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function invalidEmail($email)
	{
		$result;
		if( !filter_var($email, FILTER_VALIDATE_EMAIL) )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function passwordsMatch($password, $passwordRepeat)
	{
		$result;
		if( $password !== $passwordRepeat )
		{
			$result = true;
		}
		else
		{
			$result = false;
		}
		return $result;
	}
	
	function usernameExists($conn, $email)
	{
		$sql = "SELECT * FROM users WHERE email = ?;";
		
		$stmt = mysqli_stmt_init($conn);
		
		if( !mysqli_stmt_prepare($stmt, $sql) )
		{
			header("location: ../signup.php?error=stmtfailed");
			exit();
		}
		
		mysqli_stmt_bind_param($stmt, "s", $email);
		mysqli_stmt_execute($stmt);
		
		$resultData = mysqli_stmt_get_result($stmt);
		
		mysqli_stmt_close($stmt);
		
		if( $row = mysqli_fetch_assoc($resultData) )
		{
			return $row;
		}
		else
		{
			return false;
		}
	}
	
	function emailExists($conn, $email)
	{
		$sql = "SELECT * FROM users WHERE email = ?;";
		
		$stmt = mysqli_stmt_init($conn);
		
		if( !mysqli_stmt_prepare($stmt, $sql) )
		{
			header("location: ../signup.php?error=stmtfailed");
			exit();
		}
		
		mysqli_stmt_bind_param($stmt, "s", $email);
		mysqli_stmt_execute($stmt);
		
		$resultData = mysqli_stmt_get_result($stmt);
		
		mysqli_stmt_close($stmt);
		
		if( $row = mysqli_fetch_assoc($resultData) )
		{
			return $row;
		}
		else
		{
			return false;
		}
	}
	
	function createUser($conn, $firstname, $lastname, $email,  $password)
	{

		$sql = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?);";
		
		$stmt = mysqli_stmt_init($conn);
		
		if ( !mysqli_stmt_prepare($stmt, $sql) )
		{
			header("location: ../signup.php?error=stmtfailed");
			exit();
		}
		
		$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
		
		mysqli_stmt_bind_param($stmt, "ssss", $firstname, $lastname, $email, $hashedPassword);
		
		mysqli_stmt_execute($stmt);
		mysqli_stmt_close($stmt);
		// header("location: ../signup.php?error=none");
		session_start();
		$_SESSION["email"] = $usernameExists["email"];
		$_SESSION["firstname"] = $usernameExists["firstname"];
		$_SESSION["lastname"] = $usernameExists["lastname"];
		header("location: ../index.php");
		exit();
	}
	
	function loginUser($conn, $email, $password)
	{
		$usernameExists = usernameExists($conn, $email);
		
		if ($usernameExists === false)
		{
			header("location: ../login.php?error=wronglogin");
			exit();
		}
		
		$hashedPassword = $usernameExists["password"];
		$checkPassword = password_verify($password, $hashedPassword);
		
		if ( $checkPassword === false )
		{
			header("location: ../login.php?error=wronglogin");
			exit();
		}
		else if ( $checkPassword === true )
		{
			session_start();
			$_SESSION["email"  ] = $usernameExists["email"];
			$_SESSION["firstname"] = $usernameExists["firstname"];
			$_SESSION["lastname"] = $usernameExists["lastname"];
			header("location: ../index.php");
			exit();
		}
	}
