/*
Author: Milton Bain
Purpose: This is a simple single file that is used to implement the databse to
	hold the admin login information and name.
	[should only implement once, unless updated or deleted.]
Permissions: 
	Admin:
		Has the ability to add, delete, and display the database.
		
Last Modified: 3/20/2019
*/

create database adminDB;
use adminDB;

CREATE TABLE admins (
  ID int(11) NOT NULL auto_increment,
  FirstName varchar(64),
  LastName varchar(64),
  Username varchar(64),
  PasswordHash binary(255),
  Email varchar(64),
  PRIMARY KEY (ID)
);

INSERT INTO adminDB.admins(FirstName,LastName,Username,PasswordHash,Email) VALUES('Milton','Bain','admin','$2y$10$yKyd6dyOkSqCRVg50S66peq7CLprkUNbvDWvdQ6LDAPZ3app3S9iG','mbain@una.edu');