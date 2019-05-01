<?php
session_start();
/*
Author: Milton Bain
Purpose: This page is used in order to add an admin to the database. It uses
	the "createAdminDB.sql" database in order to do so. It gets the name of 
	the new admin, the username, and password at existing admin's discretion
	vis POST method. The passwored is hashed and all the data are stored in 
	the database.
Permissions:
	Admin:
		Admins are the only ones allowed to interact with this page.

Input: First Name, Last Name, Username, and Password of the new admin.
Output: N/A

Last Modified: 3/20/2019
*/
    if($_SESSION['admin'] == FALSE) {
	    header('Location: home.php');
	    exit();
    }
	
    $first_name = strip_tags($_POST['first_name']);
	$last_name = strip_tags($_POST['last_name']);
  	$username = strip_tags($_POST['Username']);
	$password = strip_tags($_POST['Password']);
	
	$first_name = stripslashes($first_name);
	$last_name = stripslashes($last_name);
	$username = stripslashes($username);
	$password = stripslashes($password);
	
	if($_SESSION['admin'] == TRUE) {
	
		$host = "localhost";
		$user = "root";
		$passw = "";
		$dbName = "adminDB";
		$connection = new mysqli($host, $user, $pass, $dbName);
	  
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	  
		$sql = "INSERT INTO adminDB.admins(FirstName, LastName, Username, PasswordHash) VALUES ('$first_name','$last_name','$username','$hashed_password');";
		$connection->query($sql);
		
		$connection->close();
		header('Location: home.php');
		exit();
	}
?>