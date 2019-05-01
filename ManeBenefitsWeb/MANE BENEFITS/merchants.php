<?php 
	session_start(); 
	$_SESSION['search'] = FALSE;
?>

<!--
Author: Milton Bain (scripts from open-source web) -- Modified
Purpose: This page is used to search and display different businesses in the database. It can be done by selecting a category or
	by using the search bar. The information is fetched from the database using AJAX/JavaScript and displayed at the bottom 
	of the page dynamically. 
Permissions:
	Admin:
		Can search businesses
	
	Users:
		Can search businesses
		
Input: Name of business in search bar (uses a LIKE query)
Output: The businesses that match the query

Last Modified: 4/30/2019
-->

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
		<!-- This CSS modifies the "Go To Top button -->
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
		
		<!-- This CSS displays and modifies the search bar dropdown suggestions -->
		.result p{
			margin: 0;
			padding: 7px 10px;
			border: 1px solid #CCCCCC;
			border-top: none;
			cursor: pointer;
		}
		
		<!-- This CSS changes the color of the search dropdown suggestions when hovered over -->
		.result p:hover{
			background: #f2f2f2;
		}
		</style>

</head>
<body style="background-color:grey; height: 100%;">
	
    <?php include_once("headfoot/header.php"); ?>

	<div  class="jumbotron d-flex align-items-center" style="background:transparent !important">
		<div class="container bg-white text-dark d-flex flex-column pb-2">
			<div class="justify-content-left align-self-center">
			
				<br>
				<?php
					if(isset($_SESSION['feedback'])) {
						echo "
							<div class='alert alert-info alert-dismissible fade show' role='alert'>
								<strong>Notice: </strong>".$_SESSION['feedback'];
						echo "
								<button type='button' class='close' data-dismiss='alert' aria-label='close'>
									<span aria-hidden='true'>&times;</span>
								</button>
							</div>
						";
						unset($_SESSION['feedback']);
					}
				?>
				<br>
					
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
				
				<div class="d-flex flex-column">
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
					<p class="font-weight-bold mt-2" align="center">OR</p>
					<div class="search-box">
						<input type="text" class="form-control" autocomplete="off" placeholder="Search Businesses">
						<div class="result"></div>
					</div>
				</div>
				<br>
				<!-- The following div is a placeholder for the output of the business query results: OUTPUT goes here --> 
				<div id="txtHint" class="txtHint"></div>
				
				<!-- The following  button is a placeholder for the "Go To Top" button: MODIFIED by CSS on top of page -->
				<button class="btn btn-sm" onclick="topFunction()" id="topBtn">
					Go To Top
				</button>
				
				<!-- The following function calls the selection from the dropdown AND also uses the search bar result.
						It makes a call to the business database and returns the query results and displays it in the
						"txtHint" div -->
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
				
				<!-- The following function displays the "Go To Top" button and scrolls the screen to the top of the 
						page when clicked. -->
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
				
				<!-- The following script gets the text input from the search bar and makes a call to the database. 
						This call makes a LIKE query and returns the results. These results are then put in the 
						suggestions dropdown, modified by the CSS on the top of the page. -->
				<script>
					$(document).ready(function() {
						$('.search-box input[type="text"]').on("keyup input", function() {
							var inputVal = $(this).val();
							var resultDropdown = $(this).siblings(".result");
							if(inputVal.length) {
								$.get("businessSearch.php", {term: inputVal}).done(function(data) {
									resultDropdown.html(data);
								});
							} else {
								resultDropdown.empty();
							}
						});
						
						// This section passes the clicked result in the dropdown into the showBusinesses function.
						// It then makes a database call and displays the result based on the selected business.
						$(document).on("click", ".result p", function() {
							
							$(this).parents(".search-box").find('input[type="text"]').val($(this).text());
							showBusinesses($(this).text());
							$(this).parent(".result").empty();
						});
					});
				</script>
			</div>
		</div>
	</div>
			
	<?php include_once("headfoot/footer.php"); ?>
	
	</body>
</html>