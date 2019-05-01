<?php 
	session_start();
	ob_start();

	/*
	if ($_SESSION['admin'] != TRUE) {
		header('home.php');
		exit();
	}
	*/
	
	$databaseChoice = $_POST['dbSelect'];
	$actionChoice = $_POST['actionSelect'];
	
	$_SESSION['databaseChoice'] = $databaseChoice;
	$_SESSION['actionChoice'] = $actionChoice;


echo "
	<!DOCTYPE html>
	<html lang='en'>
	<head>

		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'> <!-- Imported for mobile device scaling -->
		
		<title> Admin Page </title>
	<!--	<link rel='stylesheet' href='bootstrapStyle.css'> -->

	<!-- Latest compiled and minified CSS -->
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>

	<!-- jQuery library -->
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>

	<!-- Popper JS -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js'></script>

	<!-- Latest compiled JavaScript -->
	<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>

	</head>
	<body style='background-color:grey; height: 100%;'>
";
	include_once('headfoot/header.php');
	
echo "
		<div  class='jumbotron d-flex align-items-center' style='background:transparent !important'>
			<div class='container bg-white text-dark d-flex flex-column pb-2'>
				<div class='justify-content-left align-self-center mt-5'>
";
	
	if($databaseChoice == 'business' && $actionChoice == 'add') {
		echo "
			<form id='adminProcess' method='post' action='adminProcess.php' class='was-validated mt-4' id='addBusiness'>
			
				<div class='form-group'>
					<h5 class='font-weight-bold'>Enter valid information to add:</h5>
					<div class='form-group'>
						<label for='bName'>Name of Business:</label>
						<input type='text' class='form-control' id='bName' name='bName' placeholder='Enter name' required>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please enter valid information. e.g. Rice Box</div>
					</div>
					<div class='form-group'>								
						<label for='bAddress'>Address of Business:</label>
						<input type='text' class='form-control' id='bAddress' placeholder='Enter address' pattern='\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\.'>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please enter valid information. e.g. 253 N. Cherry St.</div>
					</div>
					<div class='form-group'>
						<label for='bCategory'>Select a category to add to:</label>
						<select class='form-control' id='bCategory' name='bCategory'>
							<option value=''>Select a category</option>
							<option value='Restaurants'>Restaurants</option>
							<option value='Apparel'>Apparel</option>
							<option value='Services'>Services</option>
							<option value='Activities'>Activities</option>
							<option value='Healthcare'>Healthcare</option>
							<option value='Rentals'>Rentals</option>
						</select>
					</div>
					<div class='form-group'>
						<label for='bDiscount'>Discount of the Business:</label>
						<input type='text' class='form-control' id='bDiscount' name='bDiscount' placeholder='Enter discount' required>
						<div class='valid-feedback'>Valid. Note: It will be shown exactly as typed above.</div>
						<div class='invalid-feedback'>Please enter valid information. e.g. 15% off your entire purchase ** excludes alcohol</div>
					</div>
					<div class='form-group'>
						<label for='bFacebook'>Facebook link:</label>
						<input type='text' class='form-control' id='bFacebook' placeholder='Enter Business facebook link'>
						<div class='valid-feedback'>Valid. Make sure the link is valid.</div>
						<div class='invalid feedback'>Please enter valid information. e.g. https://facebook.com/.....</div>
					</div>
					<div class='form-group'>
						<label for='bInstagram'>Instagram link:</label>
						<input type='text' class='form-control' id='bInstagram' placeholder='Enter Business instagram link'>
						<div class='valid-feedback'>Valid. Make sure the link is valid.</div>
						<div class='invalid feedback'>Please enter valid information. e.g. https://instagram.com/.....</div>
					</div>
					<div class='form-group'>
						<label for='bWebsite'>Website link:</label>
						<input type='text' class='form-control' id='bWebsite' placeholder='Enter Business website link'>
						<div class='valid-feedback'>Valid. Make sure the link is valid.</div>
						<div class='invalid feedback'>Please enter valid information. e.g. https://businesswebsite.com/....</div>							
					</div>
				</div>
				
				<div class='form-group form-check'>
					<label class='form-check-label'>
						<input class='form-check-input' type='checkbox' name='agree' required> I have reviewed and certify all information entered is correct.
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Check this checkbox to continue.</div>
					</label>
				</div>
				
				<div class='d-flex justify-content-center'>
					<button id='submit' type='submit' class='btn btn-secondary p-2'> Submit </button>
				</div>						
			
			</form>
		";
	}
	
	if($databaseChoice == "business" && $actionChoice == "delete") {
		echo "
			<form id='adminProcess' method='post' action='adminProcess.php' class='was-validated mt-4' id='delBusiness'>
			
				<div class='form-group'>
					<h5 class='font-weight-bold'>Enter valid information to delete:</h5>
		";
						$host = 'localhost';
						$username = 'root';
						$password = '';
						$dbName = 'businessDB';
 
						$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
						if($mysqli->connect_error) {
							die('Could not connect: ' . mysqli_connect_error());
						} 

						$result = $mysqli->query('SELECT ID,name FROM businesses');
							
						echo '<select class="btn btn-secondary" id="delBusiness" name="delBusiness">';
						while ($row = $result->fetch_assoc()) {
							
							unset($businessName);
							unset($businessId);
							$businessName = $row['name'];
							$businessId = $row['ID'];
							echo '<option value="'.$businessId.'">'.$businessName.'</option>';
								
						}
						echo '</select>';
						
						$mysqli->close();
		echo "
				</div>
				
				<div class='form-group form-check'>
					<label class='form-check-label'>
						<input class='form-check-input' type='checkbox' name='agree' required> I have reviewed and certify all information entered is correct.
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Check this checkbox to continue.</div>
					</label>
				</div>
				
				<div class='d-flex justify-content-center'>
					<button id='submit' type='submit' class='btn btn-secondary p-2'> Submit </button>
				</div>						
			
			</form>
		";
	}
	
	if($databaseChoice == "card" && $actionChoice == "add") {
		echo "
			<form id='adminProcess' method='post' action='adminProcess.php' class='was-validated mt-4' id='addCard'>
		
				<div class='form-group'>
					<h5 class='font-weight-bold'>Enter valid information to add:</h5>
					<div class='form-group'>
						<label for='cfirst'>First Name: </label>
						<input type='text' class='form-control' id='cfirst' name='cfirst' placeholder='Enter First Name' maxlength='12' pattern='^\w[a-zA-Z]{1,12}$' title='John' required autocomplete='off'>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please fill out field with a valid response. e.g. John</div>
					</div>
					<div class='form-group'>
						<label for='clast'>Last Name: </label>
						<input type='text' class='form-control' id='clast' name='clast' placeholder='Enter Last Name' maxlength='12' pattern='^\w[a-zA-Z]{1,12}$' title='Doe' required autocomplete='off'>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please fill out field with a valid response. e.g. Doe</div>
					</div>
					<div class='form-group'>
						<label for='cemail'>Email: </label>
						<input type='text' class='form-control' id='cemail' name='cemail' placeholder='Enter Email'
							pattern='^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$' 
							title='example@web.com' required autocomplete='off'>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please fill out field with a valid response. e.g. example@web.com</div>
					</div>
					<div class='form-group'>
						<label for='cphone'>Phone Number: </p>
						<input type='text' class='form-control' id='cphone' name='cphone' placeholder='Enter Phone Number' pattern='^[0-9]{3,}\-?[0-9]{3,}\-?[0-9]{4,}$' title='5551234567 or 555-123-4567' autocomplete='off'>
						<div class='valid-feedback'>Enter phone number to recieve infrequent texts about news and updates!</div>
						<div class='invalid-feedback'>Please fill out field with a valid response. e.g. 5551234567 or 555-123-4567</div>
					</div>
				</div>
				
				<div class='form-group form-check'>
					<label class='form-check-label'>
						<input class='form-check-input' type='checkbox' name='agree' required> I have reviewed and certify all information entered is correct.
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Check this checkbox to continue.</div>
					</label>
				</div>
				
				<div class='d-flex justify-content-center'>
					<button id='submit' type='submit' class='btn btn-secondary p-2'> Submit </button>
				</div>						
		
			</form>
		";
	}
	
	if($databaseChoice == "card" && $actionChoice == "delete") {
		echo "
			<form id='adminProcess' method='post' action='adminProcess.php' class='was-validated mt-4' id='delCard'>
			
				<div class='form-group'>
					<h5 class='font-weight-bold'>Enter valid information to delete</h5>
					<input type='text' class='form-control' id='delcard' name='delcard' placeholder='Enter email to remove registered card'
							pattern='^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$' 
							title='example@web.com' required autocomplete='off'>
					<div class='valid-feedback'>Valid.</div>
					<div class='invalid-feedback'>Please fill out field with a valid response. e.g. example@web.com</div>
				</div>
				
				<div class='form-group form-check'>
					<label class='form-check-label'>
						<input class='form-check-input' type='checkbox' name='agree' required> I have reviewed and certify all information entered is correct.
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Check this checkbox to continue.</div>
					</label>
				</div>
				
				<div class='d-flex justify-content-center'>
					<button id='submit' type='submit' class='btn btn-secondary p-2'> Submit </button>
				</div>						
			
			</form>
		";
	}
	
	if($databaseChoice == "admin" && $actionChoice == "add") {
		echo "
			<form id='adminProcess' method='post' action='adminProcess.php' class='was-validated mt-4' id='addAdmin'>
			
				<div class='form-group'>
					<h5 class='font-weight-bold'>Enter valid information to add to login database</h5>
					<div class='form-group'>
						<label for='afirst'>First Name: </label>
						<input type='text' class='form-control' id='afirst' name='afirst' placeholder='Enter First Name' maxlength='12' pattern='^\w[a-zA-Z]{1,12}$' title='John' required autocomplete='off'>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please fill out field with a valid response. e.g. John</div>
					</div>
					<div class='form-group'>
						<label for='alast'>Last Name: </label>
						<input type='text' class='form-control' id='alast' name='alast' placeholder='Enter Last Name' maxlength='12' pattern='^\w[a-zA-Z]{1,12}$' title='Doe' required autocomplete='off'>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please fill out field with a valid response. e.g. Doe</div>
					</div>
					<div class='form-group'>
						<label for='auser'>Username: </label>
						<input type='text' class='form-control' id='auser' name='auser' placeholder='Enter Username' maxlength='12' required autocomplete='off'>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please fill out field with a valid response.</div>
					</div>
					<div class='form-group'>
						<label for='apass'>Password:</label>
						<input type='password' class='form-control' id='apass' name='apass' placeholder='Enter Password' maxlength='12' required autocomplete='off'>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please fill out field with a valid response.</div>
					</div>
					<div class='form-group'>
						<label for='aemail'>Email:</label>
						<input type='text' class='form-control' id='aemail' name='aemail' placeholder='Enter email'
							pattern='^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$' 
							title='example@web.com' required autocomplete='off'>
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Please fill out field with a valid response. e.g. example@web.com</div>
					</div>
				</div>
				
				<div class='form-group form-check'>
					<label class='form-check-label'>
						<input class='form-check-input' type='checkbox' name='agree' required> I have reviewed and certify all information entered is correct.
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Check this checkbox to continue.</div>
					</label>
				</div>
				
				<div class='d-flex justify-content-center'>
					<button id='submit' type='submit' class='btn btn-secondary p-2'> Submit </button>
				</div>						
			
			</form>			
		";
	}
	
	if($databaseChoice == "admin" && $actionChoice == "delete") {
		echo "
			<form id='adminProcess' method='post' action='adminProcess.php' class='was-validated mt-4' id='delAdmin'>
			
				<div class='form-group'>
					<h5 class='font-weight-bold'>Enter valid information to delete</h5>
					<input type='text' class='form-control' id='deladmin' name='deladmin' placeholder='Enter email to remove Admin'
							pattern='^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$' 
							title='example@web.com' required autocomplete='off'>
					<div class='valid-feedback'>Valid.</div>
					<div class='invalid-feedback'>Please fill out field with a valid response. e.g. example@web.com</div>
				</div>
				
				<div class='form-group form-check'>
					<label class='form-check-label'>
						<input class='form-check-input' type='checkbox' name='agree' required> I have reviewed and certify all information entered is correct.
						<div class='valid-feedback'>Valid.</div>
						<div class='invalid-feedback'>Check this checkbox to continue.</div>
					</label>
				</div>
				
				<div class='d-flex justify-content-center'>
					<button id='submit' type='submit' class='btn btn-secondary p-2'> Submit </button>
				</div>
			
			</form>			
		";
	}
	
	if($databaseChoice == "business" && $actionChoice == "view") {
		echo "
			<div class='container' id='viewBusiness'>
				<div class='list-group list-group-flush'>
		";
					
					$host = "localhost";
					$username = "root";
					$password = "";
					$dbName = "businessDB";

					$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
					if($mysqli->connect_error) {
						die('Could not connect: ' . mysqli_connect_error());
					} 

					$result = $mysqli->query("SELECT ID,name,address,category,discount,facebook,instagram,website FROM businesses");
					
					while ($row = $result->fetch_assoc()) {

						echo "<div class='d-flex flex-column justify-content-center'>";
							echo "<div class='container border border-warning text-center border-bottom-0'>";
							
								echo "<h5 class='font-weight-bold mt-1'><small>ID: ".$row['ID']."</small></h5><br>";
								echo "<h5 class='font-weight-bold'><small>".$row['name']."</small></h5><br>";
								if ($row['address'] != '') {
									echo "<h5 class='font-weight-bold mt-1'><small>".$row['address']."</small></h5><br>";
								}
								echo "<h5 class='font-weight-bold mt-1'><small>".$row['category']."</small></h5><br>";
								echo "<h5 class='font-weight-bold mt-1'><small>".$row['discount']."</small></h5><br>";
							
							echo "</div>";
						echo "</div>";
						
						echo "<div class='container border border-warning border-top-0'>";
							if ($row['facebook'] != '') {
								echo "<h5 class='font-weight-bold mt-1 text-center' style='word-break: break-word;'><small>".$row['facebook']."</small></h5><br>";
							}
							if($row['instagram'] != '') {
								echo "<h5 class='font-weight-bold mt-1 text-center' style='word-break: break-word;'><small>".$row['instagram']."</small></h5><br>";
							}
							if($row['website'] != '') {
								echo "<h5 class='font-weight-bold mt-1 text-center' style='word-break: break-word;'><small>".$row['website']."</small></h5><br>";
							}
						echo "</div>";
						
					
					}
					
					$mysqli->close();
		echo "
				</div>
			</div>
		";
	}
	
	if($databaseChoice == "card" && $actionChoice == "view") {
		echo "
			<div class='container' id='viewCard'>
				<div class='list-group list-group-flush'>
		";
					$host = "localhost";
					$username = "root";
					$password = "";
					$dbName = "cardDB";

					$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
					if($mysqli->connect_error) {
						die('Could not connect: ' . mysqli_connect_error());
					} 

					$result = $mysqli->query("SELECT FirstName,LastName,Email,Phone FROM cardReg");
					
					while ($row = $result->fetch_assoc()) {
					
						echo "<div class='d-flex flex-column justify-content-center' >";
							echo "<div class='container border border-warning text-center'>";
					
								echo "<h5 class='font-weight-bold'>".$row['FirstName']."</h5><br>";
								echo "<h5 class='font-weight-bold'>".$row['LastName']."</h5><br>";
								echo "<h5 class='font-weight-bold'>".$row['Email']."</h5><br>";
								echo "<h5 class='font-weight-bold'>".$row['Phone']."</h5><br>";
								
							echo "</div>";
						echo "</div>";
						
					}
					
					$mysqli->close();		
		echo "
				</div>
			</div>
		";
	}
	
	if($databaseChoice == "admin" && $actionChoice == "view") {
		echo "
			<div class='container' id='viewAdmin'>
				<div class='list-group list-group-flush' >
		";
					$host = "localhost";
					$username = "root";
					$password = "";
					$dbName = "adminDB";

					$mysqli = new mysqli($host, $username, $password, $dbName); /* xammp: username: root no pass  business DATABASE */ 
					if($mysqli->connect_error) {
						die('Could not connect: ' . mysqli_connect_error());
					} 

					$result = $mysqli->query("SELECT ID,FirstName,LastName,Username,PasswordHash,Email FROM admins");
					
					while ($row = $result->fetch_assoc()) {
					
						echo "<div class='d-flex flex-column justify-content-center' >";
							echo "<div class='container border border-warning text-center'>";						
						
								echo "ID: ".$row['ID']."<br>";
								echo $row['FirstName']."<br>";
								echo $row['LastName']."<br>";
								echo $row['Username']."<br>";
								echo $row['Email']."<br>";
						
							echo "</div>";
						echo "</div>";
					}
					
					$mysqli->close();
		echo "
				</div>
			</div>
		";
	}

echo "<br>";
echo "
		<div class='d-flex justify-content-center'>
			<form action='adminPage.php' method='get'>
				<input type='submit' value='Return to Admin Page' name='adminPage' id='adminPage'>
			</form>
		</div>
		
		</div>
	</div>
</div>

";
	
	include_once("headfoot/footer.php");
?>