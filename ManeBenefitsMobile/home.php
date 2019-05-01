<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
	
	  <form action="register.html" method="get">
	    <input type="submit" value="Register Card" name="register" id="register">
	  </form>
	  <br>
	  <form action="login.html" method="get">
		<input type="submit" value="Admin Login" name="admin" id="admin">
	  </form>
	  <br><br>
	  <?php 
	    if ($_SESSION['admin'] == TRUE) {
	  ?>
	  
		<b>Manipulate Buisnesses as Admin:</b> <br><br>
	    <form action="adminBusiness.php" method="post">
	      <input type="radio" name="business" value="Populatebusiness">Populate business Database <br>
	      <input type="radio" name="business" value="Displaybusiness">Display business Database <br>
	      <input type="radio" name="business" value="Nukebusiness">Clear business Database <br>
		  <br>
		  <button type="submit" class="submit"> Submit </button>
		  <br><br>
		</form>
		
		<b>Manipulate Card Registrations as Admin:</b> <br><br>
		<form action="adminCard.php" method="post">
		  <input type="radio" name="card" value="PopulateCard">Populate Card Database <br>
		  <input type="radio" name="card" value="DisplayCard">Display Card Database <br>
		  <input type="radio" name="card" value="NukeCard">Clear Card Database <br>
		  <br>
		  <button type="submit" class="submit"> Submit </button>
		  <br><br>
	    </form>
		
		<b>Manipulate other Admins as Admin:</b> <br><br>
		<form action="createAdmin.php" method="post">
		  <label for="first_name">First Name: </label>
		  <input type="text" id="first_name" name="first_name" maxlength="12" pattern="^\w[a-zA-Z]{1,12}$" required autocomplete="off">
		  <br>
		
		  <label for="last_name">Last Name: </label>
		  <input type="text" id="last_name" name="last_name" maxlength="12" pattern="^\w[a-zA-Z]{1,12}$" required autocomplete="off">
		  <br>
		 
		  <label for="Username">Username: </label>
		  <input type="text" id="Username" name="Username" maxlength="12" pattern="^\w[a-zA-Z0-9]{1,12}$" required autocomplete="off">
		  <br>
		  
		  <label for="Password">Password: </label>
		  <input type="password" id="Password" name="Password" maxlength="12" required autocomplete="off">
		  <br>
		  
		  <button type="submit" class="submit"> Submit </button> <br>
	    </form>
		<br><br>
		<form action="adminAdmins.php" method="post">
		  <button type="submit" class="submit">View Admins</button>
		</form>
	  <?php } ?>
	</body>
</html>