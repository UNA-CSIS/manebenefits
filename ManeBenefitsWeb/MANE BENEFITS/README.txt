
	*------------------------------------------------------------------*
	|   _  _ ____ _  _ ____    ___  ____ _  _ ____ ____ _ ___ ____ 	   |
	|   |\/| |__| |\ | |___    |__] |___ |\ | |___ |___ |  |  [__  	   |
	|   |  | |  | | \| |___    |__] |___ | \| |___ |    |  |  ___]     |
	|                                                                  |
	*------------------------------------------------------------------*

	## ABOUT
	
	The Mane Benefits web application project is a partnership between the CS-455-01 Software Engineering class and the Steele Center for Professional Selling at the University of North Alabama.
	This project was developed for the 2019 Spring semester.
	The main purpose of this project is to re-vamp the existing Mane Benefits website, making the new website mobile friendly, as well as organized and easy for administration and user implementation.
	
	This project consists of multiple technologies, including:
		- HTML (Formatted by mostly Bootstrap and some CSS)
		- PHP
		- SQL/MySqli
		- AJAX/JavaScript
		
	## ACKNOWLEDGEMENTS
	
	Author of documentation and development: Milton Bain
	Product Owner: Dr. Butler
	CS-455-01 Professor: Dr. Crabtree
	
	All authors and associates acknowledge and cooperate throughout the production of this project.
	© 2018: Steele Center for Professional Selling : All Rights Reserved
	
	## INSTALATION AND TESTING
	
	This project was developed and tested using XAMPP. In order to produce the testing environment, must do the following steps:
		- Make sure XAMPP is running Apache and MySQL 
			- Latest release of XAMPP can be found here: https://www.apachefriends.org/index.html
		- All files and folders must be placed in the xampp/htdocs/* directory
		- Open any browser and navigate to "localhost/phpmyadmin"
		- Navigate to the "Import" tab on the top of the screen
		- Click "Choose File" and find where the .sql files are stored
		- Pick one and select it
		- After you see the file chosen, click "Go" at the bottom of the screen
		- Repeat these steps until all .sql files are imported
		- After these steps, navigate to "localhost/*/home.php" where the * is any folder in the "htdocs" that you placed the files and folders in
		- You are able to navigate through the website from here
		
	To access the administration pages, a default admin account is inserted when importing the "adminDB.sql" page. The Administration page login is in the footer of the website.
		- Username: test
		- Password: test
	Note: This account can be deleted later.
	
	In order to populate the business database with information, must do the following:
		- Navigate to the administration page
		- Login
		- Navigate to the "Other Admin Processes" page
		- In the database dropdown, make sure "Businesses Database" is selected. !! IMPORTANT !! In the action dropdown, MAKE SURE "Restore Database" is selected.
		- Click the check box and submit
		- This will populate the database from a backup file that already exists
			- Note: If you are having trouble restoring the database, refer to "## POTENTIAL PROBLEMS" for information
		
	After logging in as an admin, you can navigate to and from the administration pages and the home pages by clicking on the Administration Page link in the footer.
	When you logout, you must log back in to return to the administration pages.
	
	During testing, you can access the web-application with a mobile device. This can be done with these steps (NOTE: For Windows machine):
		- Open the command prompt
		- Type in "ipconfig /all"
		- Locate the "IPv4 Address .............. xx.x.x.xxx"
		- On your mobile browser, in the navigation bar, type in this IPv4 address and the file directory
			-	EXAMPLE: xx.x.x.xxx/*/home.php (there * is the folder in htdocs that all the files and folders are in)
		- This can be done on the LOCAL NETWORK ONLY, and if Apache on xampp are running
		
	## NAVIGATION
	
	All navigation and information diagrams are located in the "*/navigation/" folder in the project
	
	## POTENTIAL PROBLEMS
	
	Restoring Business Database:
		- In order to restore the database, the "businessBackup.txt" must be in the correct place.
		- The query that restores the database is file directory specific, meaning the .txt file must be where the query states is looking for it 
		- This query is located in the "databaseBackup.php" file. Changing this query directory may solve the problem
		
	Connecting to directions for businesses:
		- Google maps requires a .crt file under "*/xampp/apache/bin" (if using xampp for testing)
		- In order to get the security connection validated, a valid .crt file must be located there
		- A .crt file for testing is located in the "*/crt/" folder in the project that can be inserted
		
	Formatting and scripts:
		- All bootstrap classes and jquery and scripting classes are imported directly from web links
		- If formatting is an issue, make sure these links are valid and the machine is able to connect to the web 
		
	