create database cardDB;
use cardDB;

CREATE TABLE cardReg (
  FirstName varchar(64),
  LastName 	varchar(64),
  Email 	varchar(64),
  Phone 	varchar(12),
  PRIMARY KEY(Email)
);