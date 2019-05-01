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
  PasswordHash varchar(255),
  Email varchar(64),
  PRIMARY KEY (ID)
);

INSERT INTO admins(ID,FirstName,LastName,Username,PasswordHash,Email) VALUES (1,"TEST","TEST","test","$2y$10$8FZU8CNhv98VZfhpwve6Eunwu8DACnFRkqe.zdg6x27IGyVKXChN6","text@example.com");