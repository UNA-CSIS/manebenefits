<?php

	session_start();

  $host = "localhost";
  $username = "root";
  $password = "";
  $dbName = "businessDB";
	  
	$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
	if($mysqli->connect_error) {
	  die('Could not connect: ' . mysqli_connect_error());
	} 
	
	$sql = "SELECT name, address, discount, facebook, instagram, website FROM businesses WHERE category = ?";
	
	$stmt = $mysqli->prepare($sql);
	$stmt->bind_param("s", $_GET['q']);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($cName, $cAddress, $cDiscount, $cFacebook, $cInstagram, $cWebsite);
	

	while($stmt->fetch()) {
		echo "
			<div class='d-flex flex-column justify-content-center'>
			<div class='container border border-warning text-center'>
				<h5 class='font-weight-bold text-uppercase mt-1'>Name: <br><small> $cName </small></h5></br>
				<h5 class='font-weight-bold text-uppercase mt-1'>Location: <br><small>";
				if($cAddress != '') {
					echo "$cAddress";
				}
				else {
					echo "No Address Given.";
				}
		echo "	</small></h5><br>
		
				<h5 class='font-weight-bold text-uppercase mt-1'>Discount: <br><small>$cDiscount</small></h5><br>
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
		echo 				"<a href='".$cWebsite."'>
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