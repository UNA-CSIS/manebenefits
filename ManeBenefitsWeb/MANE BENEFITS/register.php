<?php session_start(); ?>
<!DOCTYPE html>
<!--
Author: Milton Bain
Purpose: This .html page is how the users register their Mane Benefits card.
	They enter the appropriate information, and it gets posted via POST method
	to "register.php". 
Permissions:
	Admin:
		Able to register their card.
		
	User:
		Able to register their card.
		
Input: First name, Last name, email, and phone number to be posted via POST method
Output: N/A

Last Modified: 4/30/2019
-->
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Imported for mobile device scaling -->
	
	<title> Card Registration </title>
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

	    <div  class="jumbotron d-flex align-items-center mt-5" style="background:transparent !important">
			<div class="container bg-white text-dark d-flex flex-column pb-2">
				<div class="justify-content-left align-self-center">
				
					<?php
						echo "<br>";
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
				
					<h2 class="text-center mt-3">Register for news and notifications with Mane Benefits!</h2>
					<br>
					<form id="registrationForm" method="post" action="addRegistrar.php" class="was-validated">
						<div class="form-group">
							<label for="first_name">First Name: </label>
							<input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First Name" maxlength="12" pattern="^\w[a-zA-Z]{1,12}$" title="John" required autocomplete="off">
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out field with a valid response. e.g. John</div>
						</div>
						<div class="form-group">
							<label for="last_name">Last Name: </label>
							<input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter Last Name" maxlength="12" pattern="^\w[a-zA-Z]{1,12}$" title="Doe" required autocomplete="off">
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out field with a valid response. e.g. Doe</div>
						</div>
						<div class="form-group">
							<label for="email">Email: </label>
							<input type="text" class="form-control" id="email" name="email" placeholder="Enter Email"
								pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" 
								title="example@web.com" required autocomplete="off">
							<div class="valid-feedback">Valid.</div>
							<div class="invalid-feedback">Please fill out field with a valid response. e.g. example@web.com</div>
						</div>
						<div class="form-group">
							<label for="phone">Phone Number: </p>
							<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone number" pattern="^[0-9]{3,}\-?[0-9]{3,}\-?[0-9]{4,}$" title="5551234567 or 555-123-4567" autocomplete="off">
							<div class="valid-feedback">Enter phone number to recieve infrequent texts about news and updates!</div>
							<div class="invalid-feedback">Please fill out field with a valid response. e.g. 5551234567 or 555-123-4567</div>
						</div>

						<div class="d-flex justify-content-center">
							<button id="registrationSubmit" type="submit" class="btn btn-secondary p-2"> Sign Up!</button>
						</div>
						<br>
						<div class="d-flex justify-content-center">
							<button type="reset" class="btn btn-light mb-3">Clear</button>
						</div>
					</form>
				</div>
			</div>
		</div>	
		
		<?php include_once("headfoot/footer.php"); ?>
	
</body>
</html>