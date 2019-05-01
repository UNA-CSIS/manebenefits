<?php 
	session_start();

	if ($_SESSION['admin'] != TRUE) {
		header('Location: home.php');
		exit();
	}
	
?>

<!--
Author: Milton Bain
Purpose: This acts as an additional page for admin processes. It is on a seperate page because it is more sensitive functions, 
	changing the backup file or the entire database. This page acts as the input form to decide whether to back-up a database
	or restore the database.
Permissions:
	Admin:
		Must be logged in to view this page.
		
	User:
		None
		
Input: Choice to back-up or restore which database
Output: N/A

Last Modified: 4/30/2019
-->

<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Imported for mobile device scaling -->
	
	<title> Admin Page </title>
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
				
				<div class="d-flex justify-content-center text-center mt-3">
					<h1 class="font-weight-bold">Additional Mane Benefits Administration Page<br>
					<small>This page features additional admin processes.</small></h1><br>
				</div>
				
				<br>
				<div class="d-flex justify-content-center text-center">
					<form action="logout.php" method="post">
						<button type="submit" class="btn btn-lg btn-info">
							<div class="text-uppercase font-weight-bold">Logout</div>
						</button>
					</form>
				</div>
				<br>
				
				<div class="container">
					<form action="databaseBackup.php" method="post" class="was-validated mt-4">
						
						<div class="form-group">
							<label for="dbSelect">Select a database:</label>
							<select class="form-control" id="dbSelect" name="dbSelect">
								<option value="business">Businesses Database</option>
								<option value="card">Registered Cards Database</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="actionSelect">Select an action to database:</label>
							<select class="form-control" id="actionSelect" name="actionSelect">
								<option value="backup">Backup Database</option>
								<option value="restore">Restore Database</option>
							</select>
						</div>
						
						<div class='form-group form-check'>
							<label class='form-check-label'>
								<input class='form-check-input' type='checkbox' name='agree' required> <b>WARNING:</b> <u>Backing up</u> a database will <b>REPLACE</b> the currect backup file. 
								<u>Restoring</u> a database will <b>REPLACE ALL</b> elements in the database from backup file.
								<div class='valid-feedback'>Valid.</div>
								<div class='invalid-feedback'>Check this checkbox to continue.</div>
							</label>
						</div>						
						
						<div class="d-flex justify-content-center mb-3">
							<button id="submit" type="submit" class="btn btn-secondary p-2"> Submit </button>
						</div>		
					
					</form>	
					<hr>
					
					<!-- The following div uses the openREADME function that opens a new window to view the README file -->
					<div class="d-flex justify-content-center mb-3">
						<button class="btn btn-light p-2" onclick="openREADME()">View README File</button>
						<script>
							function openREADME() {
								window.open('README.txt');
							}
						</script>
					</div>
					
					<form action="adminPage.php" method="post">
						<hr>
						<div class="d-flex justify-content-center mb-3">
							<button id="submit" type="submit" class="btn btn-secondary p-2"> Back to Admin Page </button>
						</div>	
					</form>
				</div>				
				
			</div> 
		</div> 
	</div> 

	<?php include_once("headfoot/footer.php"); ?>
	
</body>
</html>					