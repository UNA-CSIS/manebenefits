<?php
session_start();

	$address = $_GET['address'];
	
?>

<!-- 
Author: Milton Bain (Function from open-source web) -- Modified
Purpose: This page acts as a landing platform to redirect the address selection that
	opens a new window and, if iOS device, opens the address in the maps app, or opens
	Google Maps otherwise.
Permissions:
	Admin:
		Can access directions
		
	User:
		Can access directions

Input: N/A
Output: N/A

Last Modified: 4/30/2019

NOTICE: Google Maps requires a secure connection. A valid .crt file is required in order to 
	correctly utilize the Google Maps function. See the README file for more information.
-->

	<script>
	  var address = "<?php echo $address ?>";
	
	  if /* if we're on iOS, open in Apple Maps */
		((navigator.platform.indexOf('iPhone') != -1) || 
		 (navigator.platform.indexOf('iPad') != -1) || 
		 (navigator.platform.indexOf('iPod') != -1)) {
			window.open('maps://maps.google.com/maps?daddr='+address+'&amp;ll=');
		 }
		else /* else use Google Maps*/ {
			window.open('https://maps.google.com/maps?daddr='+address+'&amp;ll=');
		}
		
		window.location = "merchants.php";
	</script>
	