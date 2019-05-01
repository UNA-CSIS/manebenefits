<?php session_start() 
	if($_SESSION['admin'] == TRUE) {
		header('adminPage.php');
		exit();
	}
?>

<!DOCTYPE html>
<!--
Author: Milton Bain
Purpose: This is a login HTML page for the admin to login. Note that users may
	not be allowed to view this page.
Permissions:
	Admin:
		Admins are able to login using this page.
	Users:
		Users may not be able to see this page.
Input: Admin login information
Output: N/A 

Last Modified: 3/20/2019
-->
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Imported for mobile device scaling -->
	
	<title> Administrator Login </title>
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
		
					<h1 class="display-4 text-center">Admin Login:</h1>
					<br>
					<form action="checkAdmin.php" method="post">
						<p class="font-weight-bold">Username:</p> <input type="text" class="form-control" name="username" required autocomplete="off"> <br><br>
						<p class="font-weight-bold">Password:</p> <input type="password" class="form-control" name="password" required autocomplete="off"> <br><br>
						
						<div class="d-flex justify-content-center">
							<button type="submit" class="btn btn-primary p-2"> Login </button>
						</div>
						<br>
					</form>

					<div class="d-flex justify-content-center">
						<form action="home.php" method="get">
							<input type="submit" value="Return Home" name="Home" id="Home">
						</form>
					</div>
		
				</div>
			</div>
		</div>
				
		
		<?php include_once("headfoot/footer.php"); ?>

    </body>
</html>