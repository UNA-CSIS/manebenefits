<?php session_start(); 

/*
Author: Milton Bain
Purpose: Simple .php page that resets the admin $_SESSION variable to logout.
Permissions:
	Admin:
		Admins are the only ones that are able to interact with this page 

Input: N/A
Output: N/A

Last Modified: 3/20/2019
*/
	$_SESSION['admin'] = FALSE;
	
	if($_SESSION['admin'] == FALSE) {
		$_SESSION['feedback'] = "You have successfully logged out!";
		header('Location: home.php');
		exit();
	}
	else {
		$_SESSION['feedback'] = "Something went wrong trying to log you out. Please try again.";
		header('Location: adminPage.php');
		exit();
	}
?>