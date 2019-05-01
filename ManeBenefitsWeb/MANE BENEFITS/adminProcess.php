<?php 
	session_start();
	ob_start();
	
	/*
		Author: Milton Bain
		Purpose: This page takes the options from the dropdown from the "adminPage.php" and  performs the action for the appropriate combination.
			Each combination has their own section. After the action is performed, the admin is redirected to the admin page. The input for this 
			page are from the "databaseAction.php" page. 
		Permissions:
			Admin:
				Action and database choices are processed on this page
				
			User:
				None
				
		Input: Database and action (from "databaseAction.php" page)
		Output: N/A
		
		Last Modified: 4/30/2019
	*/
	
	if ($_SESSION['admin'] != TRUE) {
		header('Location: home.php');
		exit();
	}
	
	
	$databaseChoice = $_SESSION['databaseChoice'];
	$actionChoice = $_SESSION['actionChoice'];
	
	unset($_SESSION['databaseChoice']);
	unset($_SESSION['actionChoice']);
	
echo "
	<!DOCTYPE html>
	<html lang='en'>
	<head>

		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'> <!-- Imported for mobile device scaling -->
		
		<title> Admin Page </title>
	<!--	<link rel='stylesheet' href='bootstrapStyle.css'> -->

	<!-- Latest compiled and minified CSS -->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

	<!-- jQuery library -->
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

	<!-- Popper JS -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>

	<!-- Latest compiled JavaScript -->
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>

	</head>
	<body style='background-color:grey; height: 100%;'>
";
	include_once('headfoot/header.php');
	
echo "
		<div  class='jumbotron d-flex align-items-center' style='background:transparent !important'>
			<div class='container bg-white text-dark d-flex flex-column pb-2'>
				<div class='justify-content-left align-self-center mt-5'>
";

	// To Add to the Business database ---------------------------------------------------------------------
	if($databaseChoice == 'business' && $actionChoice == 'add') {
		$bName = strip_tags($_POST['bName']);
		
		// For the !isset() parameters, those fields are NOT required while submitting the form
		
		if(!isset($_POST['bAddress'])) {
			$bAddress = '';
		} else {
			$bAddress = strip_tags($_POST['bAddress']);
		}
		
		$bCategory = $_POST['bCategory'];
		$bDiscount = strip_tags($_POST['bDiscount']);
		
		if(!isset($_POST['bFacebook'])) {
			$bFacebook = '';
		} else {
			$bFacebook = strip_tags($_POST['bFacebook']);
		}
		
		if(!isset($_POST['bInstagram'])) {
			$bInstagram = '';
		} else {
			$bInstagram = strip_tags($_POST['bInstagram']);
		}
		
		if(!isset($_POST['bWebsite'])) {
			$bWebsite = '';
		} else {
			$bWebsite = strip_tags($_POST['bWebsite']);
		}
		
		$bName = stripslashes($bName);
		$bAddress = stripslashes($bAddress);
		$bDiscount = stripslashes($bDiscount);
		
		$bName = strtolower($bName);
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "businessDB";
		  
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		} 
			
		$sql = "INSERT INTO businessDB.businesses(name,address,category,discount,facebook,instagram,website) VALUES('".$bName."','".$bAddress."','".$bCategory."','".$bDiscount."','".$bFacebook."','".$bInstagram."','".$bWebsite."');";
		
		$result = $mysqli->query($sql);
		
		if($result == TRUE) {
			$_SESSION['feedback'] = "Entry for ".$bName." was successfully added!";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
		
		if($result == FALSE) {
			$_SESSION['feedback'] = "Something went wrong trying to add ".$bName." to the database.";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
		
	}
	
	// To Delete from the Business database ---------------------------------------------------------------
	if($databaseChoice == "business" && $actionChoice == "delete") {
		
		$businessID = $_POST['delBusiness'];
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "businessDB";
		  
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		} 
		
		$sql = "DELETE FROM businessDB.businesses WHERE ID='".$businessID."'";
		
		$result = $mysqli->query($sql);
		
		if($result == TRUE) {
			$_SESSION['feedback'] = "Deletion of business ID ".$businessID." was successful!";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
		
		if($result == FALSE) {
			$_SESSION['feedback'] = "Something went wrong with trying to delete business ID ".$businessID."! Please try again.";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
	}
	
	// To Add to the Card database -----------------------------------------------------------------------
	if($databaseChoice == "card" && $actionChoice == "add") {
		$cfirst = strip_tags($_POST['cfirst']);
		$clast = strip_tags($_POST['clast']);
		$cemail = strip_tags($_POST['cemail']);
		
		if(!isset($_POST['cphone'])) {
			$cphone = '';
		} else {
			$cphone = strip_tags($_POST['cphone']);
		}
		
		$cfirst = stripcslashes($cfirst);
		$clast = stripcslashes($clast);
		$cphone = stripcslashes($cphone);
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "cardDB";
		
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		} 
		
		$sql = "INSERT INTO cardDB.cardReg(FirstName,LastName,Email,Phone) VALUES('".$cfirst."','".$clast."','".$cemail."','".$cphone."');";
		
		$result = $mysqli->query($sql);
		
		if($result == TRUE) {
			$_SESSION['feedback'] = "Successfully added registrant with email ".$cemail." into the database!";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
		
		if($result == FALSE) {
			$_SESSION['feedback'] = "Something went wrong when trying to add registrant ".$cemail." to the database. Please try again.";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
	}	
	
	// To Delete from the Card database --------------------------------------------------------------------------------
	if($databaseChoice == "card" && $actionChoice == "delete") {
		
		$delcard = strip_tags($_POST['delcard']);
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "cardDB";
		
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		} 
		
		$sql = "DELETE FROM cardDB.cardReg WHERE Email='".$delcard."';";
		
		$result = $mysqli->query($sql);
		
		if($result == TRUE) {
			$_SESSION['feedback'] = "Successfully removed registrant ".$delcard." from the database!";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
		
		if($result == FALSE) {
			$_SESSION['feedback'] = "Something went wrong when trying to remove registrant ".$delcard." from the database. Please try again.";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
	}
	
	// To Add to the Admin database --------------------------------------------------------------------------------------
	if($databaseChoice == "admin" && $actionChoice == "add") {
		$afirst = strip_tags($_POST['afirst']);
		$alast = strip_tags($_POST['alast']);
		$auser = strip_tags($_POST['auser']);
		$apass = strip_tags($_POST['apass']);
		$aemail = strip_tags($_POST['aemail']);
		
		$afirst = stripslashes($afirst);
		$alast = stripslashes($afirst);
		$auser = stripslashes($auser);
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "adminDB";
		
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		} 
		
		$apassHash = password_hash($apass, PASSWORD_DEFAULT);
		
		$sql = "INSERT INTO admins(FirstName,LastName,Username,PasswordHash,Email) VALUES('".$afirst."','".$alast."','".$auser."','".$apassHash."','".$aemail."')";
		
		$result = $mysqli->query($sql);
		
		if($result == TRUE) {
			$_SESSION['feedback'] = "Successfully added admin with email ".$aemail."!";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
		
		if($result == FALSE) {
			$_SESSION['feedback'] = "Something went wrong trying to add admin with email ".$aemail." to database. Please try again.";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
	}
	
	// To Delete from the Admin database ----------------------------------------------------------------------------------------
	if($databaseChoice == "admin" && $actionChoice == "delete") {
		$deldmin = strip_tags('deladmin');
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "adminDB";
		
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		} 
		
		$sql = "DELETE FROM adminDB.admins WHERE Email='".$deladmin."';";
		
		$result = $mysqli->query($sql);
		
		if($result == TRUE) {
			$_SESSION['feedback'] = "Successfully removed admin with email ".$deladmin." from the database!";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
		
		if($result == FALSE) {
			$_SESSION['feedback'] = "Something went wrong trying to remove admin ".$deladmin." from the database. Please try again.";
			$mysqli->close();
			header("Location:adminPage.php");
			exit();
		}
	}
?>