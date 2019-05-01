<?php

  session_start();

  /*
	Author: Milton Bain
	Purpose: This page uses the AJAX call information from the "merchants.php" page in order to make a database call
		and fetch the requested information. After the information is fetched, it returns the information to be 
		displayed.
	Permisions:
		Admin:
			Can access the information
			
		Users:
			Can access the information
			
	Input: None (input comes from information on the "merchants.php" page)
	Output: N/A 
	
	Last Modified: 4/30/2019
  */
  
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbName = "businessDB";
	  
	$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
	if($mysqli->connect_error) {
	  die('Could not connect: ' . mysqli_connect_error());
	} 
	
	// If the user used the search bar, query based from the NAME of the business
	if(isset($_SESSION['search']) && $_SESSION['search'] == TRUE) {
		$sql = "SELECT name, address, discount, facebook, instagram, website FROM businesses WHERE name = ?";
		$_SESSION['search'] = FALSE;
	}
	// If the user used the CATEGORY dropdown bar, query based from the CATEGORY of the business
	else {
		$sql = "SELECT name, address, discount, facebook, instagram, website FROM businesses WHERE category = ? ORDER BY name";
	}
	
	$stmt = $mysqli->prepare($sql);
	$stmt->bind_param("s", $_GET['q']);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($cName, $cAddress, $cDiscount, $cFacebook, $cInstagram, $cWebsite);
	

	while($stmt->fetch()) {
		echo "
			<div class='d-flex flex-column justify-content-center'>
			<div class='container border border-warning text-center'>
				<h5 class='font-weight-bold text-uppercase mt-1'>Name: <br><small> $cName </small></h5><br>
				<h5 class='font-weight-bold text-uppercase mt-1'>Directions: <br><small>";
				if($cAddress != '') {
					
					// The following lines formats the address so that it can be used by iPhone maps application and Google Maps
					$mapAddress = $cAddress;
					$prepAddr = str_replace(' ', '+', $mapAddress);
					$prepAddr = str_replace(',', '', $prepAddr);
					
					echo "<a href='toMap.php?address=".$prepAddr."'><p>".$cAddress."</p></a>";
				}
				
				else {
					echo "No Address Given.";
				}
				
		echo "	</small></h5><br>
				<div class='container'>
					<h5 class='font-weight-bold text-uppercase mt-1'>Discount: <br><small>$cDiscount</small></h5><br>
				</div>
				<h5 class='font-weight-bold text-uppercase mt-1'>Social Links: </h5><br>
				<div class='d-flex justify-content-center'>
		";
				if($cFacebook != '') {
		echo		"<a href='".$cFacebook."'>
						<img class='img-fluid mr-2 mt-n4' src='@resources/facebookLogo.png'>
					</a>
		";
				}
		
				if($cInstagram != '') {
		echo 		"<a href='".$cInstagram."'>
						<img class='img-fluid mr-2 mt-n4' src='@resources/instagramLogo.png'>
					</a>
		";
				}
		echo "				
				</div>
				<h5 class='font-weight-bold text-uppercase mt-1'>Website: </h5><br>
				<div class='d-flex justify-content-center mb-1'>
		";
					if($cWebsite != '') {
		echo 			"<a href='".$cWebsite."'>
							<img class='img-fluid mt-n4' src='@resources/website.png'>
						</a>
		";			
					}
		echo "			
				</div>
			</div>
		";
	}
	echo "
		</div>
	";
	
	$mysqli->close();
	
?>