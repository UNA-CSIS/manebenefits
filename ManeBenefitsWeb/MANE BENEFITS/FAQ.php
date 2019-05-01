<?php
	session_start();
?>

<!DOCTYPE html>
<!--
Author: Milton Bain
Purpose: Simple FAQ page that displays information about potential questions to the user, as well as provide email links.
Permissions:
	Admin:
		Can access FAQ page
		
	User:
		Can access FAQ page
		
Input: N/A 
Output: N/A

Last Modified: 4/30/2019
-->
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Imported for mobile device scaling -->
	
	<title> FAQ </title>
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
				
				<div class="d-flex justify-content-center">
					<img class="img-fluid mb-n4 d-none d-sm-block" src="@resources/logo.png" alt="UNA Mane Benefits">
					<br>
				</div>
				
				<div class="container d-flex flex-column mb-2">
					<div class="justify-content-center align-self-center">
						<h3 class="text-uppercase font-weight-bold p-2"> Display Card. Save Instantly. Repeat.</h3>
						<div class="d-flex justify-content-center">
							<img class="img-fluid" src="@resources/card.png" alt="card">
						</div>
					</div>
				</div>
				<br>
				
				<h2>What is Mane Benefits?<br>
				<small>A: Mane Benefits is a program that the University of Alabama created that allows participants to get great deals with partnered businesses. This program
					allows any person with a Mane Benefits card to get Updates and Notifications about program updates and businesses (after registering your card.) A list of
					partnered businesses and the deals they offer can be found on the Merchants page!</small>
				</h2><br>
				<h2>Do I have to be a student to take part in the Mane Benefits program?<br>
				<small>A: Anyone can sign up for the program! Anyone can be a Mane Benefits card carrier. As a card carrier, you must be able to display your card to take part 
					in the great deals.</small>
				</h2><br>
				<h2>Where do I get a Mane Benefits card?<br>
					<form action="mailto:tbutler3@una.edu" method="post">
					<small>A: A card can be obtained in Keller Hall of Business or at different Mane Benefits events. For more information about events or directions, you can 
						<button type="submit" class="btn btn-sm btn-link">
							<div class="text-uppercase font-weight-bold">email us here</div>
						</button>!
					</form>
				</small>
				</h2><br>
				<h2>Can I add the Mane Benefits page to my iPhone/iPad/iPod homescreen?<br>
				<small>A: Yes! There are a few simple steps:
				<div class="container" style="background: #F5F5F5">
					<ol>
						<li>Navigate to the Mane Menefits web-application using your mobile browser.</li>
						<li>Tap on the <img src="@resources/navBox.png" alt="Box with Arrow"> icon in the navigation bar at the bottom of the screen.</li>
						<li>On the bottom row, scroll to the right to see the "Add to Homescreen" button. Tap it!</li>
						<li>Use the top box to re-name the application to "Mane Benefits"</li>
						<li>You now have the Mane Benefits web-application on your homescreen! You can access this anytime.</li>
					</ol>
				</div></small>
				</h2><br>
				<h2>Some of the links dont work! What do I do?
					<form action="mailto:tbutler3@una.edu" method="post">
						<small>A: If you are experiencing any broken links, web pages not loading, or information not loading correctly, please 
						<button type="submit" class="btn btn-sm btn-link">
							<div class="text-uppercase font-weight-bold">email us here </div>
						</button>
						and we will investigate!
					</form>
				</small>
				</h2><br>
				<h2>If you are experiencing any other problems with merchants, web pages, questions, comments, or suggestions, please contact us at any of 
					the email links above! We're listening!
				</h2>
			</div>
		</div>
	</div>	
		
	<?php include_once("headfoot/footer.php"); ?>
	
</body>
</html>
		