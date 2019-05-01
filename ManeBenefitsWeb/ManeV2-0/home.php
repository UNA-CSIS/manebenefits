<?php session_start(); 
	if(!isset($_SESSION['admin'])) {
		$_SESSION['admin'] = FALSE;
	}
?>
<!DOCTYPE html>
<!--
Author: Milton Bain
Purpose: This acts as the main page for the web interface, i.e. "index.php".
	Users and Admins will be directed here. Users can find a link to register
	their card. Admins can find a login page and, after $_SESSION['admin'] has
	been set, they can interact with the databases [need to be logged in.]
Permissions:
	Admin:
		After login, they can manipulate the databases from this page.
		Admins can also find a login link on this page.

	Users:
		This is the base page. Users can mind a link to register their Mane
			benefits card.
Input: Admins can choose how to manipulate the databases.
Output: N/A

Last Modified: 3/20/2019
-->
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Imported for mobile device scaling -->
	
	<title> Home </title>
<!--	<link rel="stylesheet" href="bootstrapStyle.css"> -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="background-color:grey; height: 100%;">
	
    <?php include_once("headfoot/header.php"); ?>

	<div  class="jumbotron d-flex align-items-center" style="background:transparent !important">
		<div class="container bg-white text-dark d-flex flex-column pb-2">
			<div class="justify-content-left align-self-center">
				
				<img class="img-fluid mb-n4" src="@resources/logo.png" alt="UNA Mane Benefits">
				<br>
				
				<div class="container d-flex flex-column mb-2">
					<div class="justify-content-center align-self-center">
						<h3 class="text-uppercase font-weight-bold p-2"> Display Card. Save Instantly. Repeat.</h3>
						<div class="d-flex justify-content-center">
							<img class="img-fluid" src="@resources/card.png" alt="card">
						</div>
					</div>
				</div>
				<br>
				
				<form action="merchants.php" method="get">
					<button type="submit" class="btn btn-lg btn-block btn-lg" style="background: #46166B; color: #DB9F11;"> 
						<div class="text-uppercase font-weight-bold">Merchants</div>
					</button>
				</form>
				<br>
				
				<form action="register.php" method="get">
					<button type="submit" class="btn btn-lg btn-block btn-lg" style="background: #46166B; color: #DB9F11;"> 
						<div class="text-uppercase font-weight-bold">Register Card</div>
					</button>
				</form>
				<br><br>
				
				<div class="d-flex flex-column align-items-center">
				<h3 class="p3 text-weight-bold text-upercase">Other Links</h3>
				<br>
				<form action="http://www.givebackmembership.com/GBLOCATOR/embed.php">
					<button type="submit" class="btn btn-lg btn-block btn-lg" style="background: #46166B; color: #DB9F11;">
						<div class="text-uppercase font-weight-bold">Merchant Locator</div>
					</button>
					<h5 class="font-weight-bold">Visit the Online Merchant Locator</h5>
				</form>
				<br>
				
				<form action="mailto:tbutler3@una.edu" method="post">
					<button type="submit" class="btn btn-lg btn-block btn-lg" style="background: #46166B; color: #DB9F11;">
						<div class="text-uppercase font-weight-bold">Suggest A Merchant</div>
					</button>
					<h5 class="text-weight-bold">Email us a Merchant Suggestion</h5>
				</form>
				</div>
			</div>
		</div>
	</div>	
		
	<?php include_once("headfoot/footer.php"); ?>
	
</body>
</html>