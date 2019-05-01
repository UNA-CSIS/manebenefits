<?php
	session_start();

	/*
		Author: Milton Bain (source from open-source web) -- Modified
		Purpose: This page uses the search bar LIKE query in order to find and return businesses from the database that
			are similar to those being searched. It uses AJAX in order to find and return the results from the LIKE
			query and are further modified in the "merchants.php" page.
		Permissions:
			Admin:
				Can search for businesses
				
			Users:
				Can search for businesses
				
		Input: None (input comes from AJAX call in "merchants.php")
		Output: N/A
		
		Last Modified: 4/30/2019
	*/
	
	$_SESSION['search'] = TRUE;
	
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbName = "businessDB";
	  
	$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
	if($mysqli->connect_error) {
	  die('Could not connect: ' . mysqli_connect_error());
	} 
	
	if(isset($_REQUEST["term"])) {
		
		$sql = "SELECT name, address, discount, facebook, instagram, website FROM businesses WHERE name LIKE ?";
		
		if($stmt = mysqli_prepare($mysqli, $sql)) {
			
			mysqli_stmt_bind_param($stmt, "s", $param_term);
			$param_term = $_REQUEST["term"] . '%';
			
			if(mysqli_stmt_execute($stmt)) {
				$result = mysqli_stmt_get_result($stmt);
				
				if(mysqli_num_rows($result) > 0) {
					
					while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
						echo "<p>" . $row["name"] . "</p>";
					}
				} else {
					echo "<p>No matches Found</p>";
				}
			} else {
				echo "ERROR: Unable  to execute $sql. " . mysqli_error($mysqli);
			}
		}
		
		mysqli_stmt_close($stmt);
	}
	
	$mysqli->close();
	
?>