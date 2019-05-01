	## ABOUT
	
	The Mane Benefits web application project is a partnership between the CS-455-01 Software Engineering class and the Steele Center for Professional Selling at the University of North Alabama.
	This project was developed for the 2019 Spring semester.
	The main purpose of this project is to create an Android Mobile Application using the existing Mane Benefits website.

		
	## ACKNOWLEDGEMENTS
	
	Author of documentation and development: Tori Sherrod
	Product Owner: Dr. Butler
	CS-455-01 Professor: Dr. Crabtree
	
	All authors and associates acknowledge and cooperate throughout the production of this project.
	© 2018: Steele Center for Professional Selling : All Rights Reserved
	
	## INSTALATION AND TESTING
	
	This project was developed and tested using XAMPP. In order to produce the testing environment, must do the following steps:
		- Make sure XAMPP is running Apache and MySQL 
			- Latest release of XAMPP can be found here: https://www.apachefriends.org/index.html
		- All files and folders must be placed in the xampp/htdocs/ManeBenefitsAndroid directory
		- Open any browser and navigate to "localhost/phpmyadmin"
		- Navigate to the "Import" tab on the top of the screen
		- Click "Choose File" and find where the .sql files are stored (in AndroidSQL folder)
		- Use the AddBusinessDB.sql file to import all businesses
		- After you see the file chosen, click "Go" at the bottom of the screen
		- After these steps, navigate to "localhost/ManeBenefitsAndroid/getRestaurants.php" where you will see the format of the JSON data
		
	Note: In order for the Web App and Android App to use the same databases, some formatting must be considered
		- Instagram addresses are different for the Web vs. Mobile App
	
		
	After populating the database, load the Android Project into Android studio
		- Since the database is not hosted on a server, you must change the IP, and possibly AppFolder name, in the app/res/values/strings.xml file
		- On a windows machine, the IPv4 address can be found by typing in "ipconfig" in the command prompt
		- The app is now configured to run properly on an emulator or connected mobile device

		
	## NAVIGATION
	
	The first page is the registration page where the user can register their ManeBenefits Card
	The categories are then displayed to the user
	After selecting a category, the businesses from selected categories are displayed
	If a business is selected, details of the business are displayed
	The user can then view the business's (if available):
		- Instagram -- redirected to the Instagram app
		- Facebook -- redirected to the Facebook app, or Facebook page in browser if app is not installed
		- Website 
		- Location -- redirected to Maps at business's address
	The top right menu button can be selected at any time to display the ManeBenefits Card, register their card, and go to the categories page
