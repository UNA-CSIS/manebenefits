<?php
	session_start();
	
	/*
		Author: Milton Bain
		Purpose: This page is used to insert the registered card information into the database. This page can be accessed by submitting the form
			from the "Register Card" link on the Home page.
		Permissions:
			Admin: 
				Can Register Card
			
			Users: 
				Can Register Card
				
		Input: N/A (information submitted by the form)
		Output: N/A
		
		Last Modified: 4/30/2019
	*/
	
	$first_name = strip_tags($_POST['first_name']);
	$last_name = strip_tags($_POST['last_name']);
	$email = strip_tags($_POST['email']);
	$phone = strip_tags($_POST['phone']);
	
	$first_name = stripslashes($first_name);
	$last_name = stripslashes($last_name);
	$email = stripslashes($email);
	$phone = stripslashes($phone);
	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbname = "cardDB";
	$mysqli = new mysqli($host, $user, $pass, $dbname);
	
	if(!$mysqli) {
	  die('Could not connect: ' . mysqli_connect_error());
	} 
	
	$sql = "INSERT INTO cardReg(FirstName, LastName, Email, Phone) VALUES ('".$first_name."','".$last_name."','".$email."','".$phone."')";
	
	$result = $mysqli->query($sql);
	
	if($result == TRUE) {
		$_SESSION['feedback'] = "Thank you ".$first_name."&nbsp".$last_name."! You have successfully registered your Mane Benefits card!";
		$mysqli->close();
		header("Location: home.php");
		exit();
	}
	
	if($result == FALSE) {
		$_SESSION['feedback'] = "Something went wrong when trying to register your card. Please try again!";
		$mysqli->close();
		header("Location: register.php");
		exit();
	}
?>