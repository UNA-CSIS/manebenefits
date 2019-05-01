<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Imported for mobile device scaling -->
	
	<title> Merchants </title>
<!--	<link rel="stylesheet" href="bootstrapStyle.css"> -->

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<style>
		#topBtn {
			display: none;
			position: fixed;
			bottom: 10px;
			right: 15px;
			z-index: 99;
			cursor: pointer;
			background:#46166B;
			color:#DB9F11;
		}
	</style>

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
				
				
				<form action="" class="text-center">
					<select name="businesses" class="btn btn-secondary" onchange="showBusinesses(this.value)">
							<option value="">Select a Business Type</option>
							<option value="Restaurants">Restaurants</option>
							<option value="Apparel">Apparel</option>
							<option value="Services">Services</option>
							<option value="Activities">Activities</option>
							<option value="Healthcare">Healthcare</option>
							<option value="Rentals">Rentals</option>
					</select>
				</form>
				<br>
				<div id="txtHint"></div>
				
				<button class="btn btn-sm" onclick="topFunction()" id="topBtn">
					Go To Top
				</button>
				
				<script>
					function showBusinesses(str) {
						var xhttp; 
						if (str == "") {
							document.getElementById("txtHint").innerHTML = "";
							return;
						}
						xhttp = new XMLHttpRequest();
						xhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("txtHint").innerHTML = this.responseText;
							}
						};
						xhttp.open("GET", "getbusinesses.php?q="+str, true);
						xhttp.send();
					}
				</script>
				<script>
					// When the user scrolls down 300px from the top of the document, show the button
					window.onscroll = function() {scrollFunction()};

					function scrollFunction() {
						if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
							document.getElementById("topBtn").style.display = "block";
						} else {
							document.getElementById("topBtn").style.display = "none";
						}
					}

					// When the user clicks on the button, scroll to the top of the document
					function topFunction() {
						document.body.scrollTop = 0;
						document.documentElement.scrollTop = 0;
					}
				</script>
			</div>
		</div>
	</div>
			
	<?php include_once("headfoot/footer.php"); ?>
	
	</body>
</html>