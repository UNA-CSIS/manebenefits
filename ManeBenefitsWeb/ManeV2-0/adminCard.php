<?php
session_start();

/*
Author: Milton Bain
Purpose: This is an interactive page that invokes different methods so the
	admin can manipulate the "createCardDB.sql" database. This page is 
	only invoked in the admins discretion. 
Permissions:
	Admin:
		Admins are the only ones allowed to interact with this page 

Input: Method to implement via POST method
Output: [potentially] items in card table

Last Modified: 3/20/2019
*/


  if ($_SESSION['admin'] == FALSE) {
    header('Location: home.php');
	exit();
  }
  
    $host = "localhost";
    $username = "root";
    $password = "";
	$dbName = "cardDB";  
	  
	$connection = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
	if(!$connection) {
	  die('Could not connect: ' . mysqli_connect_error());
	} 
	 
	  if($_POST['card'] == "PopulateCard") {
		  
		$sql = "INSERT INTO cardDB.cardReg(FirstName, LastName, Email, Phone) VALUES('Milton', 'Bain', 'mbain@una.edu', 5551234567)";
		$connection->query($sql);
		  
		$connection->close();
		header('Location: home.php');
		exit();
	  }

	  elseif($_POST['card'] == "DisplayCard") {
		  
		$sql = "SELECT * FROM cardDB.cardReg";
		$result = $connection->query($sql);
		
		if($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo $row['FirstName'] . " " . $row['LastName'] . " " .  $row['Email'] . " " . 
				$row['Phone'] . "<br>";
			}
		}
		$connection->close();
		echo "<br><br>";
		echo "<form action=\"home.php\" method=\"get\"> <input type=\"submit\" value=\"Return Home\" name=\"Home\" id=\"Home\"> </form>";
	  }
	
	  elseif($_POST['card'] == "NukeCard") {
		$sql = "DELETE FROM cardDB.cardReg";
		$connection->query($sql);
		
		$connection->close();
		header('Location: home.php');
		exit();
      }
 // }
  
?>  