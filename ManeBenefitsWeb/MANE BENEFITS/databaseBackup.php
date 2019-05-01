<?php
	session_start();

	/*
		Author: Milton Bain
		Purpose: This page acts as the processes from the "otherAdmin.php" page. It gets the information from that page, and executes
			the appropriate processes. This page can back-up to a file or restore from a file either the business database or the 
			card database. FORMATTING OF THE FILE IS IMPORTANT. Each field must be spaced out by '\t' and each entry termianted
			by '\n'. 
		Permissions:
			Admin:
				Can backup or restore the databases
				
			User:
				None:
				
		Input: None (input comes in from the "otherAdmin.php" page from dropdowns)
		Output: N/A 
		
		Last Modified: 4/30/2019
		
		NOTICE: The read from file into the database query "INFILE" is directory-specific where the file is. If its not the correct
			directory, this WILL cause problems. see README file for more information.
	*/
	if ($_SESSION['admin'] != TRUE) {
		header('Location: home.php');
		exit();
	}
	
	$databaseChoice = $_POST['dbSelect'];
	$actionChoice = $_POST['actionSelect'];
	
	
	// If Backup the Business database --------------------------------------------------------------------------------------------------------------
	if($databaseChoice == 'business' && $actionChoice == 'backup') {
	
		$businessBackup = fopen("businessBackup.txt", "w") or die("Unable to open business database backup file!");
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "businessDB";
		  
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		} 
		
		$sql = "SELECT * FROM businesses";
		
		if($result = $mysqli->query($sql)) {
			while($row = $result->fetch_assoc()) {
				// Formats the entries with '\t' between each column and '\n' after each entry
				$txt = $row['ID']."\t".$row['name']."\t".$row['address']."\t".$row['category']."\t".$row['discount']."\t".$row['facebook']."\t".$row['instagram']."\t".$row['website']."\n";
				fwrite($businessBackup, $txt);
			}
			
			$_SESSION['feedback'] = "Successfully backed up the business database!";
		}
		else {
			$_SESSION['feedback'] = "Something went wrong when trying to backup database. Please try again.";
		}
		
		$mysqli->close();
		fclose($businessBackup);
		
		header('Location: otherAdmin.php');
		exit();
	}
	
	// If Restore the Business database -------------------------------------------------------------------------------------------------------------
	if($databaseChoice == 'business' && $actionChoice == 'restore') {
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "businessDB";
		  
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		}
		
		$sql = "DELETE FROM businesses";
		
		$mysqli->query($sql);
		
		// NOTICE: READ FILE HERE **************************************
		$sql = "LOAD DATA INFILE '/xampp/htdocs/manebenefits/V2-0/businessBackup.txt' INTO TABLE businesses FIELDS TERMINATED BY '\t' LINES TERMINATED BY '\n'";
		
		if($result = $mysqli->query($sql)) {
			$_SESSION['feedback'] = "Successfully restored the business database!";
			
		}
		else {
			$_SESSION['feedback'] = "Something went wrong when restoring the database. Please try again.";
		}
		
		header('Location: otherAdmin.php');
		exit();
	}
	
/******************************************************************************************************************************************************************************************/	
	
	// If Backup the Card database ------------------------------------------------------------------------------------------------------------------
	if($databaseChoice == 'card' && $actionChoice == 'backup') {
	
		$cardBackup = fopen("cardBackup.txt", "w") or die("Unable to open card database backup file!");
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "cardDB";
		  
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		} 
		
		$sql = "SELECT * FROM cardReg";
		
		if($result = $mysqli->query($sql)) {
			while($row = $result->fetch_assoc()) {
				// Formats the entries with '\t' between each column and '\n' after each entry
				$txt = $row['FirstName']."\t".$row['LastName']."\t".$row['Email']."\t".$row['Phone']."\n";
				fwrite($cardBackup, $txt);
			}
			
			$_SESSION['feedback'] = "Successfully backed up the card database!";
		}
		else {
			$_SESSION['feedback'] = "Something went wrong when trying to backup database. Please try again.";
		}
		
		$mysqli->close();
		fclose($cardBackup);
		
		header('Location: otherAdmin.php');
		exit();
	}
	
	// If Restore the Card database -----------------------------------------------------------------------------------------------------------------
	if($databaseChoice == 'card' && $actionChoice == 'restore') {
		
		$host = "localhost";
		$username = "root";
		$password = "";
		$dbName = "cardDB";
		  
		$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
		if($mysqli->connect_error) {
		  die('Could not connect: ' . mysqli_connect_error());
		}
		
		$sql = "DELETE FROM cardReg";
		
		$mysqli->query($sql);
		
		// NOTICE: READ FILE HERE **************************************
		$sql = "LOAD DATA INFILE '/xampp/htdocs/manebenefits/V2-0/cardBackup.txt' INTO TABLE cardReg FIELDS TERMINATED BY '\t' LINES TERMINATED BY '\n'";
		
		if($result = $mysqli->query($sql)) {
			$_SESSION['feedback'] = "Successfully restored the card database!";
			
		}
		else {
			$_SESSION['feedback'] = "Something went wrong when restoring the database. Please try again.";
		}
		
		$mysqli->close();
		
		header('Location: otherAdmin.php');
		exit();
	}
?>