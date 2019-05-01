/*
Author: Milton Bain
Purpose: This is a simple single file that is used to implement the databse to
	hold the buisnesses.
	[should only implement once, unless updated or deleted.]
Permissions: 
	Admin:
		Has the ability to add, delete, and display the database.
	User:
		No direct interaction. May see information elsewhere.
		
Last Modified: 3/20/2019
*/
create database businessDB;
use businessDB;

CREATE TABLE businesses (
  ID int(11) NOT NULL auto_increment,
  name varchar(32),
  address varchar(80),
  category varchar(11),
  discount varchar(256),
  facebook varchar(80),
  instagram varchar(80),
  website varchar(512),
  PRIMARY KEY (ID)
);