<?php 
	session_start();

	/*
	if ($_SESSION['admin'] != TRUE) {
		header('home.php');
		exit();
	}
	*/
?>


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
			
				<div class="d-flex justify-content-center text-center mt-3">
					<h1 class="font-weight-bold">Mane Benefits Administration Page<br>
					<small>This page is used to manipulate the databases.</small></h1><br>
				</div>
				
				<br>
				<div class="d-flex justify-content-center text-center">
					<form action="logoutCleanup.php" method="post">
						<button type="submit" class="btn btn-lg btn-info">
							<div class="text-uppercase font-weight-bold">Logout</div>
						</button>
					</form>
				</div>
				<br>
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
				<div class="container">
					<form action="databaseAction.php" method="post">
						
						<div class="form-group">
							<label for="dbSelect">Select a database:</label>
							<select class="form-control" id="dbSelect" name="dbSelect">
								<option value="business">Businesses Database</option>
								<option value="card">Registered Cards Database</option>
								<option value="admin">Admins Database</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="actionSelect">Select an action to database:</label>
							<select class="form-control" id="actionSelect" name="actionSelect">
								<option value="view">View</option>
								<option value="add">Add to</option>
								<option value="delete">Delete from</option>
							</select>
						</div>
						
						<div class="d-flex justify-content-center mb-3">
							<button id="submit" type="submit" class="btn btn-secondary p-2"> Submit </button>
						</div>		
					
					</form>	
				</div>
			</div> 
		</div> 
	</div> 

	<?php include_once("headfoot/footer.php"); ?>
	
</body>
</html>	