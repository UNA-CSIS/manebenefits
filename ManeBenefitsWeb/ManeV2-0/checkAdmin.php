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
	
Last Modified: 3/20/2019
*/
session_start();

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

	$result = mysqli_query($connection, "SELECT Username FROM adminDB.admins WHERE Username='".$username."');";
	
	if($result == NULL) {
		$_SESSION['admin'] = FALSE;
		$_SESSION['login'] = "User not found!";
		echo $_SESSION['login'];
//		header('Location: login.php');
//		exit(0);
	}
	
	$databasePassword = mysqli_query($connection, "SELECT PasswordHash FROM admins WHERE Username='".$username."');";
	$verifyPassword = password_verify($password, $databasePassword);
	
	if ($verifyPassword == FALSE) {
		$_SESSION['admin'] = FALSE;
		$_SESSION['login'] = "Invalid Username or Password!";
		echo $_SESSION['login'];
//		header('Location: login.php');
//		exit();
		} 
	elseif ($verifyPassword == TRUE) {
		$_SESSION['admin'] = TRUE;
		$_SESSION['login'] = "Success!";
		echo $_SESSION['login'];
//		header('Location: home.php');
//		exit();
	}
	else {
		$_SESSION['login'] = "Something went wrong! Please try again!";
		echo $_SESSION['login'];
//		header('Location: login.php');
//		exit();
	}
	
	$connection->close();
?>