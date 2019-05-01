/*
Author: Milton Bain
Purpose: This is a simple single file that is used to implement the databse to
	hold the registered Mane Benefits Cards.
	[should only implement once, unless updated or deleted.]
Permissions: 
	Admin:
		Has the ability to add, delete, and display the database
	User:
		Has the ability to add to the database, can unsubscribe if wanted.
		
Last Modified: 3/20/2019
*/
create database cardDB;
use cardDB;

CREATE TABLE cardReg (
  FirstName varchar(64),
  LastName 	varchar(64),
  Email 	varchar(64),
  Phone 	varchar(24),
  PRIMARY KEY(Email)
);