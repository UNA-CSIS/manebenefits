<?php
session_start();
/*
Author: Milton Bain
Purpose: This is an interactive page that invokes different methods so the
	admin can manipulate the "createAdminDB.sql" database. This page is 
	only invoked in the admins discretion. 
Permissions:
	Admin:
		Admins are the only ones allowed to interact with this page 

Input: Method to implement via POST method
Output: [potentially] items in admin table

Last Modified: 3/20/2019
*/

  if ($_SESSION['admin'] == FALSE) {
    header('Location: home.php');
	exit();
  }
  
    $host = "localhost";
    $username = "root";
    $password = "";
	$dbName = "adminDB";  
	  
	$connection = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
	if(!$connection) {
	  die('Could not connect: ' . mysqli_connect_error());
	} 
	
	$sql = "SELECT * FROM admins";
	$result = $connection->query($sql);
	
	if($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row['FirstName'] . " " . $row['LastName'] . " " . $row['Username'] . " " . 
				 $row['PasswordHash'] . "<br>"; 
		}
	}
	
	$connection->close();
	echo "<br><br>";
	echo "<form action=\"home.php\" method=\"get\"> <input type=\"submit\" value=\"Return Home\" name=\"Home\" id=\"Home\"> </form>";
?>