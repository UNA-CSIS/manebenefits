<?php

	/*
		Author: Milton Bain
		Purpose: This file holds the data for the header portion of the web pages. This page is included in every displayed
			web page. The header is linked to a few USER FRIENDLY pages, as well as social links for the Mane Benefits program.
		Permissions:
			Admin: Can access this at any time
			
			User: Can access this at any time
			
		Input: N/A
		Output: N/A

		Last Modified: 4/30/2019
	*/

 echo '<nav class="navbar navbar-dark fixed-top" style="background: #46166B;"> <!-- PURPLE #46166B -->
			<a class="navbar-brand" href="#"></a>  <!-- Justifies Navbar Button to the right side -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<div class="d-flex justify-content-between" style="background: #DB9F11">  <!-- GOLD #DB9F11 -->
					<a class="navbar-brand" href="#"><img class="img-fluid p-1 d-none d-sm-block" src="@resources/Steele.png" alt="Steele"></a>

					<div class="d-flex flex-column justify-content-center pr-2">
						<form action="home.php" method="get">
							<button type="submit" class="btn btn-link p-1 m-2 mb-4 btn-md" style="background:#46166B; color:#DB9F11">Home</button>
						</form>
						
						<form action="merchants.php" method="get">
							<button type="submit" class="btn btn-link p-1 m-2 btn-md" style="background:#46166B; color:#DB9F11">Merchants</button>
						</form>						
					</div>
						
					<img class="img-fluid p-1 d-none d-sm-block" src="@resources/card.png" alt="Mane Card">	
					
					<div class="d-flex flex-column justify-content-center pr-3 pl-2">
						<form action="FAQ.php" method="get">
							<button type="submit" class="btn btn-link p-1 m-2 mb-4 btn-md" style="background:#46166B; color:#DB9F11">FAQ</button>
						</form>
						
						<form action="register.php" method="get">
							<button type="submit" class="btn btn-link p-1 m-2 btn-md" style="background:#46166B; color:#DB9F11">Register Card</button>
						</form>						
					</div>
					
					<div class="row align-items-center">
						<div class="col-sm-2">
							<a href="https://www.facebook.com/UNASALESCENTER/?fref=ts">
								<img src="@resources/facebook.png" alt="facebook">
							</a>
						</div>
						<div class="col-sm-2">
							<a href="https://www.instagram.com/steele_sales/">
								<img src="@resources/instagram.png" alt="instagram">
							</a>
						</div>
						<div class="col-sm-2">
							<a href="https://twitter.com/unaprosales">
								<img src="@resources/twitter.png" alt="twitter">
							</a>
						</div>
						<div class="col-sm-2">
							<a href="https://www.linkedin.com/in/steele-center-for-professional-selling-76072484/">
								<img src="@resources/linked.png" alt="Linkedin">
							</a>
						</div>
						<div class="col-sm-2">
							<a href="https://www.google.com/">
								<img src="@resources/contact.png" alt="contact">
							</a>
						</div>
					</div>		
				</div>
			</div>
		</nav>';
?>