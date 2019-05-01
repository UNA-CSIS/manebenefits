<?php
/*
Author: Milton Bain
Purpose: This PHP document is passed parameters from "login.html". It makes
	a database call to check the credentials of the person trying to login.
	It checks the "createAdminDB.sql" database in order to compare the 
	information that is needed. After it checks, the user will be directed back
	to the login page if login failed. Otherwise, the admin will be directed 
	to "home.php" with set $_SESSION['admin'] privaledges.
Permissions:
	Admin:
		Able to attempt to login.
	User:
		May not be able to attempt to login.
		
Input: Username and Password of the user logging in via "login.html" POST method
Output: N/A 
	
Last Modified: 4/30/2019
*/

session_start();

	if($_SESSION['admin'] == TRUE) {
		header('Location: adminPage.php');
		exit();
	}

	$username = strip_tags($_POST['username']);
	$password = strip_tags($_POST['password']);
	
	$username = stripslashes($username);
	$password = stripslashes($password);

	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "adminDB";
	$connection = new mysqli($host, $user, $pass, $dbname);
	
	if(!$connection) {
	  die('Could not connect: ' . mysqli_connect_error());
	} 
	
	// Tries to find a user with the username BEFORE checking password
	$sql = "SELECT Username FROM admins WHERE Username='".$username."'";
	$fetchResult = $connection->query($sql);
	$result = $fetchResult->fetch_assoc();
	
	// If no user is found with username, return to login page
	if($result['Username'] == NULL) {
		$_SESSION['admin'] = FALSE;
		$_SESSION['feedback'] = "Invalid Username or Password!";
		header('Location: login.php');
		exit(0);
	}
	
	$fetchPassword = $connection->query("SELECT PasswordHash FROM admins WHERE Username='".$username."'");
	$databasePassword = $fetchPassword->fetch_assoc();
	
	// Verifies that the password hash form database and the entered password match
	$verifyPassword = password_verify($password, $databasePassword['PasswordHash']);
	
	if ($verifyPassword == FALSE) {
		$_SESSION['admin'] = FALSE;
		$_SESSION['feedback'] = "Invalid Username or Password!";
		header('Location: login.php');
		exit();
		} 
		
	else if ($verifyPassword == TRUE) {
		$_SESSION['admin'] = TRUE;
		$_SESSION['feedback'] = "You have successfully logged in!";
		header('Location: adminPage.php');
		exit();
	}
	else {
		$_SESSION['feedback'] = "Something went wrong! Please try again!";
		header('Location: login.php');
		exit();
	}
	
	$connection->close();
?>